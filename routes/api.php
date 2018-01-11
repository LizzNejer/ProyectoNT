<?php

use Illuminate\Http\Request;

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



//clientes
Route::get('ingresarCliente','Cliente@vistaIngresarCliente');
Route::get('verClientes','Cliente@vistaClientes');

Route::post('ingresarCliente','Cliente@store');
Route::get('verClientes','Cliente@indexCliente');
Route::get('eliminar/{id}','Cliente@deleteC');

//articulos
Route::get('ingresarProducto','Articulo@vistaIngresarProducto');
Route::get('verProductos','Articulo@vistaProductos');

Route::post('ingresarProducto','Articulo@store');
Route::get('verProductos','Articulo@indexProducto');
Route::get('eliminarP/{id}','Articulo@deleteP');
