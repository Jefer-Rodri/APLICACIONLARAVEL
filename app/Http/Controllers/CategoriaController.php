<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->all();
        $categoria = Categoria::create([
            'nombre' => $params['nombre'],
        ]);

        return $categoria;
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;

        $categorias = Categoria::with('libros')
            ->limit($size)->get();

        return $categorias;
    }

    public function show($id)
    {
        $categorias = Categoria::find($id);

        return $categorias;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        Categoria::find($id)->update([
            'nombre' => $params['nombre'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Categoria::find($id)->delete();

        return 'Registro eliminado';
    }
}
