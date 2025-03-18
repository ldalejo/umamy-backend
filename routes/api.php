<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    
    });

    // Cerrar Sesión
    Route::post('/logout', [AuthController::class, 'cerrarSesion']);

    // Rutas Categorias
    Route::get('/categorias', [CategoriaController::class, 'index']);

    // Rutas Pedidos
    Route::get('/pedidos', [PedidoController::class, 'index']);
    Route::put('/pedidos/actualizar-pedido/{pedido}', [PedidoController::class, 'actualizarPedido']);
    Route::post('/pedidos/guardar-pedido', [PedidoController::class, 'guardarPedido']);

    // Rutas Productos
    Route::get('/productos', [ProductoController::class, 'index']);
    Route::get('/productos-disponibles', [ProductoController::class, 'productosDisponibles']);
    Route::put('/productos/actualizar-producto/{producto}', [ProductoController::class, 'actualizarProducto']);
});


//Autenticación
Route::post('/registro', [AuthController::class, 'registro']);
Route::post('/iniciar-sesion', [AuthController::class, 'iniciarSesion']);



