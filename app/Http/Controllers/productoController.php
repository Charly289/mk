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

        return products::all();                    

    }    


    function productos_data(Request $request){
        if($request->ajax()){
            return datatables()->of(products::all())->tojson();
        }
        return view('market.home');

    }

    function editar_reporte(Request $request){ 
        
        $id = $request->input('id');
        $producto = $request->input('producto');
        $descripcion = $request->input('descripcion');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

         $prodAct=products::findOrNew($id);

         $prodAct->id = $request->id;
         $prodAct->producto = $request->producto;
         $prodAct->descripcion = $request->producto;
         $prodAct->cantidad = $request->producto;
         $prodAct->precio = $request->producto;

         $prodAct->save();

         //$respuesta = ['success' => true, 'message' => 'Producto Actualizado','Producto'];
        
         return $respuesta;        

    }

    function del_rep(Request $request){
       
    }

       
}
