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

    Route::post('/logout', [AuthController::class, 'cerrarSesion']);

    Route::get('/pedidos', [PedidoController::class, 'index']);
    Route::post('/pedidos/guardar-pedido', [PedidoController::class, 'guardarPedido']);

});


//Autenticación
Route::post('/registro', [AuthController::class, 'registro']);
Route::post('/iniciar-sesion', [AuthController::class, 'iniciarSesion']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);



