<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function myWelcomeMethod(){

        // $products = Product::all();
        // return view('welcome')->with(compact('products')); //compact -> arreglo asociativo

        // $products = DB::table('products')->get();
        // return view('welcome')->with(compact('products'));

        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('product_images.featured', '<>', false)
            ->orderBy('products.product_name', 'asc')
            ->get();

        return view('welcome')->with(compact('products'));

        // $categories = Category::has('products')->get();
    	// return view('welcome')->with(compact('categories'));


    }
}
