<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos(){
        $productos = Producto::all();
        return $productos;
    }

    public function crearProducto(Request $request){
        $input = $request->all();

        $producto = new Producto();
        $producto->nombre = $input["nombre"];
        $producto->descripcion = $input["descripcion"];
        $producto->precio = $input["precio"];
        $producto->save();
        return $producto;
    }

    public function eliminarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return "ok";
    }
}
