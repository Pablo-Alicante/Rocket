<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
