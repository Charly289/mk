<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productoController extends Controller
{
    function registrer_producto(){
        DB:table('productos')->insert([
            'nombre'=>$nombre,'descripcion'=>$descripcion,'cantidad'=>$cantidad]);

    }
}