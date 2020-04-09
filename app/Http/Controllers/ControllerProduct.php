<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.products', compact(['products', 'categories']));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.newproduct', compact('categories'));
    }

    public function store(Request $request)
    {   
        $product = Product::create([
            'name' => $request->input('productName'),
            'stock' => $request->input('productStock'),
            'price' => $request->input('productPrice'),
            'category_id' => $request->input('productCategory')
        ]);
        
        return redirect('/products');

    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return isset($product) 
            ? view('products.editProduct', compact(['product', 'categories'])) 
            : redirect('/products');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (isset($product)) {
            $product->name = $request->input('productName');
            $product->stock = $request->input('productStock');
            $product->price = $request->input('productPrice');
            $product->category_id = $request->input('productCategory');
            
            $product->save();
        }

        return redirect('/products');
    }

    public function destroy($id)
    {   
        $product = Product::find($id);

        if (isset($product)) {
            $product->delete();
        }

        return redirect('/products');
    }
}
