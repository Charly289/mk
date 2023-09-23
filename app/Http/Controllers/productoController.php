<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\products;
use Response;


class productoController extends Controller
{
    
    function registrer_producto(Request $request ){        
      
        $productos=products::all();

        return $request;         

    }
    
}