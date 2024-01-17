<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
