<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderingController extends Controller
{

    public function myUpdate(Request $request)
    {
    	$client = auth()->user();
    	$order = $client->order;
    	$order->order_status = 'Pending';
    	$order->order_date = Carbon::now();
    	$order->order_date_delivery = Carbon::now();
        $order->order_total = $request->total_order;
    	$order->save(); // UPDATE

    	// $admins = User::where('admin', true)->get();
    	// Mail::to($admins)->send(new NewOrder($client, $cart)); v5.5

    	$notification = 'Tu orden se ha registrado correctamente. Te contactaremos pronto vía mail!';
    	return back()->with(compact('notification'));
    }

}
