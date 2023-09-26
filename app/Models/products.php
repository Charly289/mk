<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primarykey = 'id';
    protected $fillable = ['id','nombre','descripcion','cantidad','precio'];       

   
}
