<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Iluminate\View\market\home;
use App\Models\products;
use LDAP\Result;
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
            return datatables()->of(products::all())->tojson();
        }
        return view('market.home');

    }

    function ed_rep(Request $request){
         

    }

    function del_rep(Request $request){
       
    }
}
       

