<?php

namespace App\Http\Controllers;

use App\Models\CartLine;

class CartLineController extends Controller
{
    public function cartLines()
    {
        $cartLines = CartLine::all();

        return response()->json(['cartLines' => $cartLines], 404);
    }
}
