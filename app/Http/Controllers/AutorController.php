<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Autor;
class AutorController extends Controller
{
    #listar autores
    public function index()
{
    $params = request()->all();
    if (isset($params['']) && $params[''] == true) {
        $autores = Autor::with([''])->get();
    } else {
        $autores = Autor::get();
    }

    return $autores;
}
    #ver autor
    public function show($id)
    {
        $params = request()->all();
        if (isset($params['']) && $params[''] == true) {
            $autores = Autor::with([''])->find($id);
        } else {
            $autores = Autor::find($id);
        }
        if (is_null($autores)){
            return 'El Autor buscado  no existe';
        }
    
        return $autores;
    }

    #crear autor
    public function store(Request $request)
    {
        $params = $request->all();
        $autores = Autor::create([
            'nombres' => $params['nombres'],
            'apellidos' => $params['apellidos']
        ]);
        return $autores;
    }
    
    #cambiar datos del autor
    public function update($id, Request $request)
    {
        $params = $request->all();
        $autores = Autor::find($id)->update([
            'nombres' => $params['nombres'],
            'apellidos' => $params['apellidos']
        ]);
        return 'datos del autor Actualizado';
        return $autores;
    }

    #Borrar autor
    public function destroy($id)
    {
        $autores = Autor::find($id)->delete();

        if ($autores) {
            return 'Autor eliminado.';
        } else {
            return 'No se puedo eliminar Autor.';
        }
    }

}
