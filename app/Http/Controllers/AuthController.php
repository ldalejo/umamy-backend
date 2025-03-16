<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /* 
     *  Función para que el usuario pueda registrarse
     * 
     */

    public function registro (RegistroRequest $request)
    {
        // Validar el registro
        $data = $request->validated();

        // Crear el usuario

        $usuario = User::create([
            'name' => $data['nombre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return response()->json([
            'token' => $usuario->createToken('token')->plainTextToken,
            'usuario' => $usuario
        ], 201);
    }

    /* 
     *  Función para que el usuario pueda iniciar sesión
     * 
     */

    public function iniciarSesion (LoginRequest $request)
    {
        $data = $request->validated();

        // Revisar password
        if (!Auth::attempt($data)) {
            return response()->json([
                'errors' => ['Credenciales incorrectas. Verifica tu correo y contraseña.']
            ], 422);
        }

        // Autenticar al usuario
        $user = Auth::user();
        return response()->json([
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ]);
    }

    /* 
     *  Función para que el usuario pueda cerrar sesión
     * 
     */
    
    public function cerrarSesion (Request $request)
    {

    }
}
