<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Fillable;

class ControllerProduct extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.newproduct', compact('categories'));
    }

    public function store(Request $request)
    {   
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {   
        
    }
}
