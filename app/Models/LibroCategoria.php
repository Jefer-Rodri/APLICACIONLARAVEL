<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroCategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'libro_id',
        'categoria_id'
    ];

    #Traer la info de los cursos
    public function autor()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
