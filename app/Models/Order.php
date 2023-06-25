<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\OrderDetail;

class Order extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
    	return $this->hasMany(OrderDetail::class);
    }

    public function getTotalAttribute()
    {
    	$total = 0;
    	foreach ($this->details as $detail) {
    		// $total += $detail->quantity * $detail->product->price;
    		$total += $detail->quantity * $detail->price;
    	}
    	return $total;
    }

}
