<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    //
    #listar Categorias
    public function index()
{
    $params = request()->all();
    if (isset($params['']) && $params[''] == true) {
        $categorias = Categoria::with([''])->get();
    } else {
        $categorias = Categoria::get();
    }

    return $categorias;
}
    #Ver Categoria
    public function show($id)
    {
        $params = request()->all();
        if (isset($params['']) && $params[''] == true) {
            $categorias = Categoria::with([''])->find($id);
        } else {
            $categorias = Categoria::find($id);
        }
        if (is_null($categorias)){
            return 'La Categoria buscada  no existe';
        }
    
        return $categorias;
    }

    #Crear Categoria
    public function store(Request $request)
    {
        $params = $request->all();
        $categorias = Categoria::create([
            'clasificacion' => $params['clasificacion'],
            'contenido' => $params['contenido']
        ]);
        return $categorias;
    }
    
    #Cambiar datos de la Categoria
    public function update($id, Request $request)
    {
        $params = $request->all();
        $categorias = Categoria::find($id)->update([
            'clasificacion' => $params['clasificacion'],
            'contenido' => $params['contenido']
        ]);
        return 'Datos de la Categoria Actualizado';
        return $categorias;
    }

    #Borrar Categoria
    public function destroy($id)
    {
        $categorias = Categoria::find($id)->delete();

        if ($categorias) {
            return 'Categoria eliminada.';
        } else {
            return 'No se puedo eliminar Categoria.';
        }
    }

}
