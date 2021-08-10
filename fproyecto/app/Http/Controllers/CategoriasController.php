<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriasController extends Controller
{
    public function getCategorias(){
        $categorias = Categoria::all();
        return $categorias;
    }

    public function crearCategoria(Request $request){
        $input = $request->all();

        $categoria = new Categoria();
        $categoria->nombre = $input["nombre"];
        $categoria->descripcion = $input["descripcion"];

        $categoria->save();
        return $categoria;
    }

    public function eliminarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return "ok";
    }

    public function obtenerPorId(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $categoria = Categoria::findOrFail($id);
        return $categoria;
    }

    public function actualizarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $input["nombre"];
        $categoria->descripcion = $input["descripcion"];
        $categoria->save();
        return $categoria;
    }
}
