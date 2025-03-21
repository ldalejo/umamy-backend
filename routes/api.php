<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

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
    Route::get('/pedidos-completados', [PedidoController::class, 'pedidosCompletados']);
    Route::get('/pedidos-usuario/{usuario}', [PedidoController::class, 'pedidosUsuario']);
    Route::put('/pedidos/actualizar-pedido/{pedido}', [PedidoController::class, 'actualizarPedido']);
    Route::put('/pedidos/cobrar-pedido/{pedido}', [PedidoController::class, 'cobrarPedido']);
    Route::post('/pedidos/guardar-pedido', [PedidoController::class, 'guardarPedido']);

    // Rutas Productos
    Route::get('/productos', [ProductoController::class, 'index']);
    Route::get('/productos-disponibles', [ProductoController::class, 'productosDisponibles']);
    Route::post('/producto/anadir-producto', [ProductoController::class, 'anadirProducto']);
    Route::put('/productos/actualizar-producto/{producto}', [ProductoController::class, 'actualizarProducto']);
    Route::delete('/producto/eliminar-producto/{producto}', [ProductoController::class, 'eliminarProducto']);

    // Rutas Usuario
    Route::get('/usuarios', [UserController::class, 'index']);
    Route::get('/datos-usuario/{user}', [UserController::class, 'datosUsuario']);
    Route::put('/actualizar-datos-usuario/{user}', [UserController::class, 'actualizarDatosUsuario']);

});

//Autenticación
Route::post('/registro', [AuthController::class, 'registro']);
Route::post('/iniciar-sesion', [AuthController::class, 'iniciarSesion']);



