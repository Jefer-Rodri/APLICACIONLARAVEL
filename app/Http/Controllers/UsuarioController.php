<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->all();
        $usuario = Usuario::create([
            'nombre' => $params['nombre'],
            'apellidos' => $params['apellidos'],
        ]);

        return $usuario;
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;

        $usuarios = Usuario::with('libros')
            ->limit($size)->get();

        return $usuarios;
    }

    public function show($id)
    {
        $usuarios = Usuario::find($id);

        return $usuarios;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        Usuario::find($id)->update([
            'nombre' => $params['nombre'],
            'apellidos' => $params['apellidos'],
        ]);

        return 'Actualizado';
    }

    public function destroy($id)
    {
        Usuario::find($id)->delete();

        return 'Eliminado';
    }

}
