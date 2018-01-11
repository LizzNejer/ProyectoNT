<?php
// :: es para no tener que instanciar un objeto

namespace App\Http\Controllers;

use Illuminate\Http\Request;//

use App\Customer;

class Cliente extends Controller
{
		public function vistaIngresarCliente()
		{
			return view('ingresarcliente');
		}
		public function vistaClientes()
		{
			return view('consultarcliente');
		}
		public function store(Request $request)//insertar
        {
            Customer::create($request->all());
			return view('ventanaPrincipal');
        }
		
		public function deleteC(Request $request,$id)//eliminar
        {
			$registro = Customer::findOrFail($id)->delete();
			$clientes=\App\Customer::all();
			return  view('consultarcliente',['resultado_clientes'=>$clientes]);
        }
		
		public function indexCliente()//busqueda general
		{
			$clientes=\App\Customer::all();
			return  view('consultarcliente',['resultado_clientes'=>$clientes]);
		}       

		
        public function update(Request $request, $id)//actualizar
        {
            $registro = Customer::findOrFail($id);
            $registro->update($request->all());

        }
        public function delete(Request $request, $id)//eliminar
        {
            $registro = Customer::findOrFail($id);
            $registro->delete();

            return 204;
        }

        public function show($id)//busqueda por parámetros
        {
            return Customer::find($id);
        }

}
