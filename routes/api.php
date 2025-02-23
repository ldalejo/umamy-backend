<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'second'])->get('/user', function (Request $request) {
    return $request->user();

    
});

//Autenticación
Route::post('/registro', [AuthController::class, 'registro']);