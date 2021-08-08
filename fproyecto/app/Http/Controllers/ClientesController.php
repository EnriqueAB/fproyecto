<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getClientes(){
        $clientes = Cliente::all();
        return $clientes;
    }

    public function crearCliente(Request $request){
        $input = $request->all();

        $cliente = new Cliente();
        $cliente->rut = $input["rut"];
        $cliente->nombre = $input["nombre"];
        $cliente->direccion = $input["direccion"];
        $cliente->telefono = $input["telefono"];

        $cliente->save();
        return $cliente;
    }

    public function eliminarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return "ok";
    }
}
