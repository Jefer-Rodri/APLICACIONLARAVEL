<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'libros';

    protected $fillable = [
        'titulo',
    ];

    #Padre
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    #Hijo
    public function reseñas()
    {
        return $this->hasMany(Reseña::class, 'libro_id');
    }

    #Relacion de * a *
    public function libroAutor()
    {
        return $this->hasMany(LibroAutor::class, 'libro_id');
    }

    public function libroCategoria()
    {
        return $this->hasMany(LibroCategoria::class, 'libro_id');
    }
}
