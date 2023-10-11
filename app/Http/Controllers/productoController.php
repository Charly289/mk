<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Iluminate\View\market\home;
use App\Models\products;
use Response;



class productoController extends Controller
{
    function registrar(Request $request ){

            $products = new products();
            $products->nombre = $request->input('producto');
            $products->descripcion = $request->input('descripcion');
            $products->cantidad = $request->input('cantidad');
            $products->precio = $request->input('precio');
            $products->save(); 
             
            $respuesta = ['success' => true, 'message' => 'Datos Guardados','products'=>$products];
            return $respuesta;

    }

    function productos_data(Request $request){
        if($request->ajax()){
            return datatables()->of(products::all())->tojson();
        }
        return view('market.home');

    }
}
       