<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use File;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::where('id', '<>', 1)->orderBy('name')->paginate(10);
    	return view('categories.index')->with(compact('categories')); // listado

    }

    public function create()
    {
    	return view('categories.create'); // formulario de registro
    }

    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save(); // UPDATE

        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with(compact('category')); // form de edición
    }

    public function update(Request $request, $id)
    {

        $category = Category::find($id); //Re insert pero entiende por find
        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();
        return redirect('/categories');

    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        return back();
    }
}
