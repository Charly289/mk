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
    function registrar(Request $request){
        
        $prod = new products();
        $prod->producto =$request->input('producto');
        $prod->descripcion =$request->input('descripcion');
        $prod->cantidad =$request->input('cantidad');
        $prod->precio =$request->input('precio');
        $prod->save();       
        
        //return response()->json([$request]);
        $productos = products::all();

        return view('market.home');                    
    }    

    function productos_data(Request $request){
        if($request->ajax()){
            return datatables()->of(products::all())->tojson();
        }
        return view('market.home');
    }

    function editar_reporte(Request $request){ 
        $id=$request->id;
        $prod = products::find($id);
        $prod->producto =$request->input('producto');
        $prod->descripcion =$request->input('descripcion');
        $prod->cantidad =$request->input('cantidad');
        $prod->precio =$request->input('precio');
        $prod->save();
    }

    function del_rep(Request $request){
        $id=$request->id;
        $prod = products::find($id);
        $prod->delete();
    }

       
}
