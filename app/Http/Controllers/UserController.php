<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }

    public function user($id)
    {
        $user = User::find($id);


        // Verifica si la categoría existe.
        if (! $user) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Usuario no encontrada'], 404);
        }

        // Devuelve los datos en formato JSON.
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
        $user->email_verified_at = $request->email_verified_at;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->active = $request->active;
        $user->unsubscribe = $request->unsubscribe;
        $user->unsubscribe_at = $request->unsubscribe_at;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user->login_at = $request->login_at;

        $user->save();

        return redirect()->route('users');
    }

    public function userUpdate($id, Request $request)
    {
        $user = User::find($id);
        $user->uuid = $request->uuid;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->active = $request->active;
        $user->unsubscribe = $request->unsubscribe;
        $user->unsubscribe_at = $request->unsubscribe_at;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user->login_at = $request->login_at;

        $user->save();

        return redirect()->route('users');
    }

    public function userDelete($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('users');
    }

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

    public function orders($id)    {
        $orders = Order::where('user_id', $id)->get();

        foreach ($orders as $order) {
            $orderlines = OrderLine::where('order_id', $order->id)->get();
            foreach ($orderlines as $orderline) {
                $products = Product::where('id', $orderline->product_id)->get();
                $orderline->products = $products;
            }
            $order->orderlines = $orderlines;
        }

        return response()->json(['orders' => $orders]);
    }

    public function userComments($id)
    {
        $comments = Comment::where('user_id', $id)->get();

        foreach ($comments as $comment) {
            $products = Product::where('id', $comment->product_id)->get();
            $comment->products = $products;
        }

        return response()->json(['user' => $comments]);
    }

    public function userOrdersAdd($id,Request $request)
    {
        $user = User::find($id);

        $order = new Order();
        $order->user_id = $user->id;
        $order->user_comments = $request->user_comments;
        $order->cart_id = $request->cart_id;
        $order->coupon_id = $request->coupon_id;
        $order->save();

        /*$orderline = new OrderLine();
        $orderline->order_id = $order->id;
        $orderline->product_id = $product->id;
        $orderline->units = $request->units;
        $orderline->price_base = $product->price;
        $orderline->price_tax = $request->price_tax;
        $orderline->price_total = ($product->price * $request->units) + ($product->price * $request->price_tax);
        $orderline->save();*/

        return redirect()->route('userOrders', ['id' => $user->id]);
    }
}
