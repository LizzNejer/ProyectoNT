<?php
// :: es para no tener que instanciar un objeto

namespace App\Http\Controllers;

use Illuminate\Http\Request;//

use App\Order;

class Order extends Controller
{
	
	public function indexOrder()//busqueda general
	{
            return \App\Order::all();
	}       

        public function update(Request $request, $id)//actualizar
        {
            $registro = Order::findOrFail($id);
            $registro->update($request->all());

        }
        public function delete(Request $request, $id)//eliminar
        {
            $registro = Order::findOrFail($id);
            $registro->delete();

            return 204;
        }

        public function store(Request $request)//insertar
        {
            return Order::create($request->all());
        }

        public function show($id)//busqueda por parámetros
        {
            return Order::find($id);
        }

}
