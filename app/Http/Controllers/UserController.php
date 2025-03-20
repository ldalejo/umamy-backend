<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return new UserCollection(User::all());
    }

    public function datosUsuario(Request $request, User $user)
    {
        // Manejamos el error si no encuentra al usuario
        if (!$user) {
            return response()->json(['error' => 'El usuario no existe'], 404);
        }

        return response()->json([
            'request' => $request,
            'usuario' => $user
        ]);
    }

    public function actualizarDatosUsuario(Request $request, User $user)
    {
        $usuario = User::where('id', $request->usuario_id)->first();

        // Manejamos el error si no encuentra al usuario
        if (!$user ) {
            return response()->json(['error' => 'El usuario no existe'], 404);
        }

        // Actualizamos los datos del usuario
        $user->nombre = $request->datosUsuario['nombre'];
        $user->apellido = $request->datosUsuario['apellido'];
        $user->telefono = $request->datosUsuario['telefono'];
        $user->direccion = $request->datosUsuario['direccion'];
        $user->ciudad = $request->datosUsuario['ciudad'];
        $user->pais = $request->datosUsuario['pais'];
        $user->codigo_postal = $request->datosUsuario['codigo_postal'];
        $user->save();
    
        return response()->json([
            'message' => 'Usuario actualizado.',
            'datos_usuario' => $user
        ]);
    }
}
