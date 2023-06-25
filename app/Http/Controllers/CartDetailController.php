<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;


class CartDetailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myStore(Request $request)
    {

    	$orderDetail = new OrderDetail();
    	$orderDetail->order_id = auth()->user()->order->id;
    	$orderDetail->product_id = $request->product_id;
    	$orderDetail->quantity = $request->quantity;
    	$orderDetail->price = $request->price;
    	$orderDetail->save();

    	$notification = 'El producto se ha cargado a tu orden exitosamente!';
    	return back()->with(compact('notification'));
    }

    public function myDestroy(Request $request)
    {
    	$orderDetail = OrderDetail::find($request->order_detail_id);

        //Solo puedo eliminar si es el mismo usuario del mismo carrito/orden activo
    	if ($orderDetail->order_id == auth()->user()->order->id)
    		$orderDetail->delete();

        $notification = 'El producto se ha eliminado de la orden correctamente.';
        return back()->with(compact('notification'));
    }

}
