<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Clientes
Route::get("clientes/get", [ClientesController::class, "getClientes"]);
Route::post("clientes/post", [ClientesController::class, "crearCliente"]);
Route::post("clientes/delete", [ClientesController::class, "eliminarCliente"]);

//Categorias
Route::get("categorias/get", [CategoriasController::class, "getCategorias"]);
Route::post("categorias/post", [CategoriasController::class, "crearCategoria"]);
Route::post("categorias/actualizar", [CategoriasController::class, "actualizarCategoria"]);
Route::post("categorias/delete", [CategoriasController::class, "eliminarCategoria"]);

//Empleados
Route::get("empleados/get", [EmpleadosController::class, "getEmpleados"]);
Route::post("empleados/post", [EmpleadosController::class, "crearEmpleado"]);
Route::post("empleados/delete", [EmpleadosController::class, "eliminarEmpleado"]);

//Productos
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "eliminarProducto"]);