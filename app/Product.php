<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use Illuminate\Database\Eloquent\Model;
    protected $fillable = ['name', 'stock', 'price', 'category_id'];

}
