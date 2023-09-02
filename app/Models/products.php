<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $primarykey = 'id_productos';
    protected $fillable = ['id_productos','nombre','descripcion','cantidad','precio'];
    use HasFactory;
}