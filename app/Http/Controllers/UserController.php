<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function userLogin()
    {
        return response()->json(['user' => 'userLogin']);
    }

    public function userRegister()
    {
        return response()->json(['user' => 'userRegister']);
    }

    public function userUpdate($id)
    {
        return response()->json(['user' => 'userUpdate']);
    }

    public function userDelete($id)
    {
        return response()->json(['user' => 'userDelete']);
    }

    public function userFavorite($id)
    {
        return response()->json(['user' => 'userFavorite']);
    }

    public function userFavoriteAdd($id, $product)
    {
        return response()->json(['user' => 'userFavoriteAdd']);
    }

    public function userFavoriteDelete($id, $product)
    {
        return response()->json(['user' => 'userFavoriteDelete']);
    }

    public function orders($id)
    {
        return response()->json(['user' => 'orders']);
    }

    public function comments($id)
    {
        return response()->json(['user' => 'comments']);
    }
}
