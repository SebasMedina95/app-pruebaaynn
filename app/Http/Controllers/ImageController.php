<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{

    public function myIndex($id){

        // $product = Product::find($id);
        // $images  = $product->images;
        // return view('admin.products.images.index');

        $images = DB::table('products')
            ->leftJoin('product_images', 'product_images.product_id', '=', 'products.id')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            // ->where('product_images.featured', '<>', false)
            ->where('product_images.product_id', '=', $id) //Esta activo
            ->select('products.*',
                     'product_images.image_product',
                     'product_images.featured',
                     'product_images.id as id_imagen_product')
            ->orderBy('product_images.id', 'desc')->paginate(5);
            // ->get();

        $product = Product::find($id);

        return view('admin.products.images.index')->with(compact('images', 'product')); //View list product

    }

    public function myStore(Request $request, $id){

        $product = new ProductImage();
        $product->image_product = $request->input('image_product');
        $product->product_id = $id;
        $product->featured = false;


        $product->save();
        return back(); //Donde estaba antes

    }

    public function myDestroy(Request $request, $id){

        $productImage = ProductImage::find($request->input('image_id_delete'));

        $productImage->delete();

        return back();

    }

    public function mySelect($idProduct, $idImagen, $b){

        $productImage = ProductImage::find($idImagen);

        if($b === 'false'){
            $productImage->featured = false;
        }else{
            $productImage->featured = true;
        }

        $productImage->save();
        return back();


    }



}
