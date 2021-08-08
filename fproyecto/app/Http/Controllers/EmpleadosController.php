<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function getEmpleados(){
        $empleados = Empleado::all();
        return $empleados;
    }

    public function crearEmpleado(Request $request){
        $input = $request->all();

        $empleado = new Empleado();
        $empleado->rut = $input["rut"];
        $empleado->nombre = $input["nombre"];
        $empleado->horario = $input["horario"];

        $empleado->save();
        return $empleado;
    }

    public function eliminarEmpleado(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return "ok";
    }
}
