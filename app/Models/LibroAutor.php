<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroAutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'libro_id',
        'autor_id'
    ];

    #Traer la info de los cursos
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }
}
