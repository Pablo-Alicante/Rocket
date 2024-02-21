<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function userFavorite($id)
    {
        $user = User::find($id);
        $favorites = DB::table('favorites')
            ->join('products', 'favorites.product_id', '=', 'products.id')
            ->join('models', 'models.id', '=', 'products.model_id')
            ->where('user_id', $user->id)->get();

        return response()->json(['user' => $user, 'favorites' => $favorites]);
    }

    public function userFavoriteAdd(Request $request)
    {

        $user = User::find($request->user_id);
        $product = Product::find($request->product_id);
        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->product_id = $product->id;
        $favorite->save();

        return redirect()->route('userFavorite', ['id' => $user->id]);
    }

    public function userFavoriteDelete($id)
    {

        $favorite = Favorite::find($id);
        $favorite->delete();

        return redirect()->route('userFavorite', ['id' => $favorite->user_id]);
    }
}
