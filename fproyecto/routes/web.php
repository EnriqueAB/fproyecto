<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home
Route::view("/","home")->name("home");
//clientes
Route::view("/agregar_cliente","agregar_cliente")->name("agregar_cliente");
Route::view("/ver_clientes","ver_clientes")->name("ver_clientes");
//categorias
Route::view("/agregar_categoria","agregar_categoria")->name("agregar_categoria");
Route::view("/ver_categorias","ver_categorias")->name("ver_categorias");
//empleados
Route::view("/agregar_empleado","agregar_empleado")->name("agregar_empleado");
Route::view("/ver_empleados","ver_empleados")->name("ver_empleados");
//productos
Route::view("/agregar_producto","agregar_producto")->name("agregar_producto");
Route::view("/ver_productos","ver_productos")->name("ver_productos");