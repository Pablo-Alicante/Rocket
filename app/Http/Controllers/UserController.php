<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersList()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }

    public function userDetail($id)
    {
        $user = User::find($id);

        return response()->json(['user' => $user]);
    }

    public function userRegister(Request $request)
    {
        $user = new User();
        $user->uuid = $request->uuid;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->password = bcrypt($request->password);
        $user->email_verified_at = $request->email_verified_at;

        $user->save();

        return redirect()->route('usersList');
    }

    public function userUpdate($id, Request $request)
    {
        $user = User::find($id);
        $user->uuid = $request->uuid;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->password = bcrypt($request->password);
        $user->email_verified_at = $request->email_verified_at;

        $user->save();

        return redirect()->route('usersList');
    }

    public function userDelete($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('usersList');
    }

    // PENDIENTE DE REVISAR
    public function userLogin()
    {
        return response()->json(['user' => 'userLogin']);
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
