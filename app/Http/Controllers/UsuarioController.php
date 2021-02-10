<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UsuarioController extends Controller
{

    public function getUsuarios(Request $request)
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function insertUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        $usuario->save();
    }
    public function getUsuario(Request $request)
    {
        $usuario = Usuario::findOrFail($request->idUsuario);
        return $usuario;
    }

    public function updateUsuario(Request $request)
    {
        $usuario = Usuario::findOrFail($request->idUsuario);

        $usuario->nombre = $request->nombre;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        $usuario->save();

       
    }

    public function deleteUsuario(Request $request)
    {
        $usuario = Usuario::destroy($request->idUsuario);
        return $usuario;
    }


}

?>