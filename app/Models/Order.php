<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function orderLine()
    {
        return $this->belongsTo(OrderLine::class);
    }

    // Esta todavía no está hecha/repasada
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
