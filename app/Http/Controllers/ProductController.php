<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function myIndex(){

        $products = DB::table('products')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            // ->where('product_images.featured', '<>', false)
            ->where('products.product_status', '=', "1") //Esta activo
            ->select('products.*',
                     'categories.name')
            ->orderBy('products.id', 'desc')->paginate(5);
            // ->get();

        return view('admin.products.index')->with(compact('products')); //View list product

    }

    public function myCreate(){

        $categories = Category::orderBy('id')->get();
        return view('admin.products.create')->with(compact('categories')); // formulario de registro

    }

    public function myStore(Request $request){

        //Validar
        $myMessages = [
            "product_name.required" => 'El nombre del producto es obligatorio',
            "product_name.max" => 'El nombre del producto no debe sobrepasar los 100 caracteres',
            "product_name.min" => 'El nombre debe tener mínimo 5 caracteres',

            "product_description.required" => 'La descripción del producto es obligatorio',
            "product_description.max" => 'El nombre del producto no debe sobrepasar los 200 caracteres',

            "product_value.required" => 'El valor del producto es un campo obligatorio',
            "product_value.numeric" => 'El valor del producto debe ser un número',
            "product_value.min" => 'El valor del producto no puede ser negativo',

            "product_amount.required" => 'La cantidad del producto es un campo obligatorio',
            "product_amount.numeric" => 'La cantidad del producto debe ser un número',
            "product_amount.min" => 'La cantidad del producto no puede ser negativo',

        ];
        $rules = [
            "product_name" => 'required|max:100|min:5',
            "product_description" => 'required|max:200',
            "product_value" => 'required|numeric|min:0',
            "product_amount" => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules, $myMessages);

        //Register product
        //dd($request->all());
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_long_description = $request->input('product_long_description');
        $product->product_value = $request->input('product_value');
        $product->product_amount = $request->input('product_amount');
        $product->product_status = "1";
        // $product->category_id = 1;
        $product->category_id = $request->category_id;


        $product->save();
        return redirect('/admin/products');

    }

    public function myEdit($id){

        $product = Product::find($id);
        $categories = Category::orderBy('id')->get();
        return view('admin.products.edit')->with(compact('product','categories')); //View create form

    }

    public function myUpdate(Request $request, $id){

        //Validar
        $myMessages = [
            "product_name.required" => 'El nombre del producto es obligatorio',
            "product_name.max" => 'El nombre del producto no debe sobrepasar los 100 caracteres',
            "product_name.min" => 'El nombre debe tener mínimo 5 caracteres',

            "product_description.required" => 'La descripción del producto es obligatorio',
            "product_description.max" => 'El nombre del producto no debe sobrepasar los 200 caracteres',

            "product_value.required" => 'El valor del producto es un campo obligatorio',
            "product_value.numeric" => 'El valor del producto debe ser un número',
            "product_value.min" => 'El valor del producto no puede ser negativo',

            "product_amount.required" => 'La cantidad del producto es un campo obligatorio',
            "product_amount.numeric" => 'La cantidad del producto debe ser un número',
            "product_amount.min" => 'La cantidad del producto no puede ser negativo',

        ];
        $rules = [
            "product_name" => 'required|max:100|min:5',
            "product_description" => 'required|max:200',
            "product_value" => 'required|numeric|min:0',
            "product_amount" => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules, $myMessages);

        //Register product
        //dd($request->all());
        $product = Product::find($id); //Re insert pero entiende por find
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_long_description = $request->input('product_long_description');
        $product->product_value = $request->input('product_value');
        $product->product_amount = $request->input('product_amount');
        $product->category_id = $request->category_id;


        $product->save();
        return redirect('/admin/products');

    }

    public function myDestroy(Request $request, $id){

        //Register product
        //dd($request->all());
        $product = Product::find($id); //Re insert pero entiende por find
        $product->product_status = "0";

        $product->save();
        return redirect('/admin/products');

    }

    public function myShow($id){

        $images = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('product_images.product_id', '=', $id)
            ->select('products.*',
                     'product_images.image_product',
                     'product_images.featured',
                     'categories.name')
            ->orderBy('products.id', 'desc')
            ->get();

        $imagep = collect();

        // $imagep = DB::table('products')
        //     ->join('categories', 'categories.id', '=', 'products.category_id')
        //     ->join('product_images', 'products.id', '=', 'product_images.product_id')
        //     ->where('product_images.featured', '<>', false)
        //     ->where('products.product_status', '=', '1')
        //     ->where('product_images.product_id', '=', $id)
        //     ->limit(1)
        //     ->get();

        // return $imagep;

        $product = Product::find($id);
        $category = Category::find( $product->category_id );

        $imagesLeft = collect();
        $imagesRight = collect();

        foreach ($images as $key => $image) {
            if( $key%2 == 0 ){
                $imagesLeft->push($image);
            }else{
                $imagesRight->push($image);
            }
        }

        return view('products.show')->with(compact('images','product','category','imagesLeft','imagesRight'));

    }

}
