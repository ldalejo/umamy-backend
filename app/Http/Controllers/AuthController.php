<?php

namespace App\Http\Controllers;

use App\Http\Request\RegistroRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /* 
     *  Función para que el usuario pueda registrarse
     * 
     */

    public function registrarse (RegistroRequest $request)
    {
        //validar el registro
        $data = $request->validate();
    }

    /* 
     *  Función para que el usuario pueda iniciar sesión
     * 
     */

    public function iniciarSesion (Request $request)
    {

    }

    /* 
     *  Función para que el usuario pueda cerrar sesión
     * 
     */
    
    public function cerrarSesion (Request $request)
    {

    }
}
