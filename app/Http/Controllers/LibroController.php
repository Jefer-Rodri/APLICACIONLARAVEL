<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->all();
        $libro = Libro::create([
            'titulo' => $params['titulo'],
            'usuario_id' => $params['usuario_id']
        ]);

        return $libro;
    }

    public function index(Request $request)
    {
        
        $params = $request->all();
        
        $size = isset($params['size']) ? $params['size'] : 5;

        $libros = Libro::with('usuario')->where('usuario_id', $params['usuario_id'])
            ->limit($size)->get();

        return $libros;
    }

    public function show($id)
    {
        $libro = Libro::find($id);

        return $libro;$libro = Libro::find($id);

        return $libro;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        Libro::find($id)->update([
            'titulo' => $params['titulo'],
            'usuario_id' => $params['usuario_id']
        ]);

        return 'Actualizado';
    }

    public function destroy($id)
    {
        Libro::find($id)->delete();

        return 'Eliminado';
    }
    
}
