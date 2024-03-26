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
        'id_autor',
        'id_usuario',
        
    ];
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    public function reseñas()
    {
        return $this->hasMany(Reseña::class, 'id_libro');
    
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function libroCategoria()
    {
        return $this->hasMany(LibroCategoria::class, 'id_libro');
    }
}
