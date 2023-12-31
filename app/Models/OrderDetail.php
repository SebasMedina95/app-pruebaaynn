<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;

    // CartDetail N               1 Product
    public function product(): BelongsTo
    {
    	return $this->belongsTo(Product::class);
    }
}
