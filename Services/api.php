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

//Route::get('libro/{consulta}','LibroDP@consultarLibro');


/*ruta para acceder
http://localhost/carpeta/api/libro/
*/

Route::get('','EstudiantesLN@index');//busqueda general
Route::get('Estudiantes/{consulta}','EstudiantesLN@show');// busqueda por parámetro

Route::post('Estudiantes','EstudiantesLN@store');//insertar

Route::put('Estudiantes/{id}','EstudiantesLN@update');// actualizar


