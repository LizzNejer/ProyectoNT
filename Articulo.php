<?php
// :: es para no tener que instanciar un objeto

namespace App\Http\Controllers;

use Illuminate\Http\Request;//

use App\Item;

class Articulo extends Controller
{
	
		public function vistaIngresarProducto()
		{
			return view('ingresarproductos');
		}
		public function vistaProductos()
		{
			return view('consulproductos');
		}
		public function store(Request $request)//insertar
        {
            Item::create($request->all());
			return view('ventanaPrincipal');
        }
		
		public function deleteP(Request $request,$id)//eliminar
        {
			$registro = Item::findOrFail($id)->delete();
			$productos=\App\Item::all();
			return  view('consulproductos',['resultado_productos'=>$productos]);
        }
		
		public function indexProducto()//busqueda general
		{
			$productos=\App\Item::all();
			return  view('consulproductos',['resultado_productos'=>$productos]);
		}

}
