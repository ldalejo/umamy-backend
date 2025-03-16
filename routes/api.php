<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'second'])->get('/user', function (Request $request) {
    return $request->user();

    
});

//Autenticación
Route::post('/registro', [AuthController::class, 'registro']);


Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);




/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

}); */

