<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reseña extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'reseñas';

    protected $fillable = [
        'contenido',
    ];

    #Padre
    public function libros()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}
