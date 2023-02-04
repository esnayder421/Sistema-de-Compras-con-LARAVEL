<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = "productos";
    public $primarykey = "id";
    public $timestamps = false;
    use HasFactory;

}
