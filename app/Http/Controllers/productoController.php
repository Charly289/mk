<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
   

    }
    
}