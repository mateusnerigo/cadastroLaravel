<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ControllerCategory extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.newcategory');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('categoryName');
        $category->save();

        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        if (isset($category)) {
            return view('categories.editcategory', compact('category'));
        }

        return redirect('/categories');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (isset($category)) {
            $category->name = $request->input('categoryName');
            $category->save();
        }

        return redirect("/categories");
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (isset($category)) {
            $category->delete();
        }

        return redirect('/categories');
    }
}
