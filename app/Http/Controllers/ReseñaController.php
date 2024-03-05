<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseñaController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->all();
        $reseña = Reseña::create([
            'contenido' => $params['contenido'],
            'usuario_id' => $params['usuario_id'],
            'libro_id' => $params['libro_id']
        ]);

        return $reseña;
    }

    public function index(Request $request)
    {
        
        $params = $request->all();
        
        $size = isset($params['size']) ? $params['size'] : 5;

        $reseñas = Reseña::with('usuario, libro')->where('usuario_id, libro_id', $params['usuario_id, libro_id'])
            ->limit($size)->get();

        return $reseñas;
    }

    public function show($id)
    {
        $reseña = Reseña::find($id);

        return $reseña;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        Reseña::find($id)->update([
            'contenido' => $params['contenido'],
            'usuario_id' => $params['usuario_id'],
            'libro_id' => $params['libro_id']
        ]);

        return 'Actualizado';
    }

    public function destroy($id)
    {
        Reseña::find($id)->delete();

        return 'Eliminado';
    }
}
