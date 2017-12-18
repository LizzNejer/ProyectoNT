<?php
// :: es para no tener que instanciar un objeto

namespace App\Http\Controllers;

use Illuminate\Http\Request;//

use App\Student;

class LibrosLN extends Controller
{
	public function show($consulta)
	{
		return Student::find($consulta);
	}
	public function index()
	{
		return  Student::all();
	}
	public function update(Request $request, $id)
	{
		$registro= Student::findOrFail($id);
		$registro->update($request->all());
	
		return $registro;
	}
	public function delete(Request $request, $id)
	{
		$registro= Student::findOrFail($id);
		$registro->delete();
	
		return 204;
	}

}
