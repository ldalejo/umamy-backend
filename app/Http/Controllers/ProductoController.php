<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function anadirProducto(Request $request)
    {
        // Validamos los datos del producto
        //$data = $request->validated();

        // Buscamos el nombre de la categoria
        $nombreCategoria = Categoria::where('id', $request->categoria_id)->first()->nombre;
        $nombreCategoria = strtolower($nombreCategoria);

        // Buscamos la extension de la imagen
        $extensionImagen = $request->file('imagen')->getClientOriginalExtension();

        // Cambiamos el nombre del producto para guardar la imagen
        $nombreImagen = str_replace(' ', '_', $request->nombre);
        $nombreImagen = "$nombreImagen.$extensionImagen";
        
        // Iniciar la transacción
        DB::beginTransaction();

        try {
            // Guardamos la ruta de la imagen
            $rutaImagen = $request->hasFile('imagen')
            ? $request->file('imagen')->storeAs($nombreCategoria, $nombreImagen, 'public') 
            : null;

            // Almacenamos un nuevo producto
            $producto = new Producto();
            $producto->categoria_id = $request->categoria_id;
            $producto->nombre = $request->nombre;
            $producto->precio = $request->precio;
            $producto->imagen = $rutaImagen;
            $producto->save();

            DB::commit();
            return response()->json([
                'message' => 'Producto almacenado.'
            ]);

        } catch (\Exception $e) {
            // Si hay algún error, revertimos la transacción
            DB::rollBack();
    
            // Devuelves el error en la respuesta
            return response()->json([
                'message' => 'Error al guardar el producto.',
                'error' => $e->getMessage(),
            ], 500);
        }
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
            return response()->json([
                'error' => 'Pedido no encontrado'
            ], 404);
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
    public function eliminarProducto(Producto $producto)
    {
        try {
            // Iniciamos la transaction
            DB::beginTransaction();

            // Eliminar la imagen del almacenamiento si existe
            if ($producto->imagen) {
                \Storage::disk('public')->delete($producto->imagen);
            }

            // Eliminar el producto de la base de datos
            $producto->delete();

            DB::commit();

            return response()->json([
                'message' => 'Producto eliminado correctamente'
            ]);
            
        } catch (\Exception $e) {
            // Si hay algún error, revertimos la transacción
            DB::rollBack();

            // Devuelves el error en la respuesta
            return response()->json([
                'message' => 'Error al eliminar el producto.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function productosDisponibles()
    {
        return new ProductoCollection(Producto::where('disponible', 1)->get());
    }
}
