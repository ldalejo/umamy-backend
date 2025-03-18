<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Resources\PedidoCollection;
use App\Models\PedidoProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PedidoCollection(Pedido::with('user', 'productos')->where('estado', 0)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guardarPedido(Request $request)
    {
        // Iniciar la transacción
        DB::beginTransaction();
    
        try {
            // Almacenamos un nuevo pedido
            $pedido = new Pedido();
            $pedido->user_id = Auth::user()->id;
            $pedido->total = $request->total;
            $pedido->save();
    
            // Obtenemos los datos del pedido y los productos
            $pedidoId = $pedido->id;
            $productos = $request->productos;
            $pedidoProducto = [];
    
            foreach ($productos as $producto) {
                $pedidoProducto[] = [
                    'pedido_id' => $pedidoId,
                    'producto_id' => $producto['id'],
                    'cantidad' => $producto['cantidad'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
            }
    
            // Almacenamos los productos del pedido en la base de datos
            PedidoProducto::insert($pedidoProducto);
    
            DB::commit();
            return response()->json([
                'message' => 'Pedido realizado correctamente.'
            ]);
    
        } catch (\Exception $e) {
            // Si hay algún error, revertimos la transacción
            DB::rollBack();
    
            // Devuelves el error en la respuesta
            return response()->json([
                'message' => 'Error al realizar el pedido.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizarPedido(Request $request, Pedido $pedido)
    {
        // Manejamos el error si no encuentra el pedido
        if (!$pedido) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }

        // Cambiamos el estado a completado
        $pedido->estado = 1;
        $pedido->save();
    
        return response()->json([
            'message' => 'Pedido completado.',
            'pedido' => $pedido
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
