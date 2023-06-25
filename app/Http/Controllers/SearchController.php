<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{

    public function show(Request $request)
    {
    	$query = $request->input('query');
    	$products = Product::where('product_name', 'like', "%$query%")->
                             where('product_description', 'like', "%$query%")->paginate(5);

    	if ($products->count() == 1) {
    		$id = $products->first()->id;
    		return redirect("products/$id"); // 'products/'.$id
    	}

    	return view('search.show')->with(compact('products', 'query'));
    }

    public function data()
    {
    	$products = Product::pluck('name');
    	return $products;
    }

}
