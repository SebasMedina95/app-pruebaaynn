<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function myIndex(){

        $products = DB::table('products')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            // ->where('product_images.featured', '<>', false)
            ->select('products.*',
                     'categories.name')
            ->orderBy('products.id', 'desc')->paginate(5);
            // ->get();

        return view('admin.products.index')->with(compact('products')); //View list product

    }

    public function myCreate(){

        return view('admin.products.create'); //View create form

    }

    public function myStore(Request $request){

        //Register product
        //dd($request->all());
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_long_description = $request->input('product_long_description');
        $product->product_value = $request->input('product_value');
        $product->product_amount = $request->input('product_amount');
        $product->product_status = "1";


        $product->save();
        return redirect('/admin/products');

    }

    public function myEdit($id){

        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); //View create form

    }

    public function myUpdate(Request $request, $id){

        //Register product
        //dd($request->all());
        $product = Product::find($id); //Re insert pero entiende por find
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_long_description = $request->input('product_long_description');
        $product->product_value = $request->input('product_value');
        $product->product_amount = $request->input('product_amount');
        $product->product_status = "1";


        $product->save();
        return redirect('/admin/products');

    }

}
