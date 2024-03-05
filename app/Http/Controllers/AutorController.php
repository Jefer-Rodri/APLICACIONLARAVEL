<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->all();
        $autor = Autor::create([
            'nombre' => $params['nombre'],
            'apellidos' => $params['apellidos'],
        ]);

        return $autor;
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;

        $autores = Autor::with('libros')
            ->limit($size)->get();

        return $autores;
    }

    public function show($id)
    {
        $autores = Autor::find($id);

        return $autores;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        Autor::find($id)->update([
            'nombre' => $params['nombre'],
            'apellidos' => $params['apellidos'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Autor::find($id)->delete();

        return 'Registro eliminado';
    }
}
