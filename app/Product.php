<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'price', 'textarea', 'tovar', 'tovar_small', 'user_id', 'categoria_id'];
}
