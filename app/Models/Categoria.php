<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'categorias';

    protected $fillable = [
        'clasificacion',
        'contenido'
    ];
    public function libroCategoria()
    {
        return $this->hasMany(LibroCategoria::class, 'id_categoria');
    }
}
