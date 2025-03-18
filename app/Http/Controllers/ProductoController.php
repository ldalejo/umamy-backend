<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductoCollection(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizarProducto(Request $request, Producto $producto)
    {
        // Manejamos el error si no encuentra el producto
        if (!$producto) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }

        // Cambiamos el estado a completado
        $producto->disponible = !$producto->disponible;
        $producto->save();
        
        $mensaje = $producto->disponible === 1 ? 'Producto disponible' : 'Producto no disponible';

        return response()->json([
            'message' => $mensaje,
            'producto' => $producto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function productosDisponibles()
    {
        return new ProductoCollection(Producto::where('disponible', 1)->get());
    }
}
