<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_usuario');
    }

    public function Reseñas()
    {
        return $this->hasMany(Reseña::class, 'id_usuario');
    }
}
