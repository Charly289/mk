<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\products;
use LDAP\Result;
use Response;


class productoController extends Controller
{
    
    function registrer_producto(Request $request ){
        
            

    }
    function registrar(Request $request){
        
        $producto=$_POST['producto'];
        $descripcion=$_POST['descripcion'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];

        $products =new products();
        $products->nombre =$request->input('producto');
        $products->descripcion =$request->input('descripcion');
        $products->cantidad =$request->input('cantidad');
        $products->precio =$request->input('precio');
        $products->save();
        
        return response()->json([$request]);

    }
    
}