<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Iluminate\View\market\home;
use App\Models\products;
use Response;



class productoController extends Controller
{

    
    function registrer_producto(Request $request ){
        
            

    
    function registrar(Request $request){     
        
        $prod = new products();
        $prod->nombre =$request->input('producto');
        $prod->descripcion =$request->input('descripcion');
        $prod->cantidad =$request->input('cantidad');
        $prod->precio =$request->input('precio');
        $prod->save();
        
        //return response()->json([$request]);
        $productos = products::all();


        return products::all();
                    

    }
    
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
       

