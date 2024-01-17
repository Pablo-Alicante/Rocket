<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->HasMany(Product::class);
    }

    public function menu()
    {
        return $this->HasOne(Menu::class);
    }
}
