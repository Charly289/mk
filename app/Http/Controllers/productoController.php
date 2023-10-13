<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Iluminate\View\market\home;
use App\Models\products;
use DataTables;
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
            $data = products::latest()->get();
            return datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>
                    <a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
                    return $btn;

                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('market.home');

    }
}
       