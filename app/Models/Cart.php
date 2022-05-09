<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        "id_product", "name", "price", "image", "id_size","size_name","id_topping","topping_name","quantity","sumprice","id_user"
    ];
}
