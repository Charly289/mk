<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\products;

class productoController extends Controller
{
    function registrer_producto(){
   
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];



        

        /*DB:table('productos')->insert([
            'nombre'=>$nombre,'descripcion'=>$descripcion,'cantidad'=>$cantidad]);*/

    }
    
}