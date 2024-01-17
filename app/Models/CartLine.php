<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
