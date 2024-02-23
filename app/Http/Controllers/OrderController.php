<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::all();

        return response()->json(['orders' => $orders], 404);
    }

    public function orderId($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $order = Order::find($id);

        // Verifica si la categoría existe.
        if (! $order) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        $order_lines = DB::table('order_lines')->where('order_id', $order->id)->get();
        $users = DB::table('users')->where('id', $order->user_id)->get();
        $cart = DB::table('carts')->where('id', $order->cart_id)->get();

        // Devuelve los datos en formato JSON.
        return response()->json(['order' => $order, 'order_lines' => $order_lines, 'users' => $users, 'cart' => $cart], 200);
    }

    public function OrderAdd(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->user_comments = $request->user_comments;
        $order->cart_id = $request->cart_id;
        $order->coupon_id = $request->coupon_id;

        $order->save();

        return redirect()->route('orders');
    }

    public function orderUpdate($id, Request $request)
    {
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->user_comments = $request->user_comments;
        $order->cart_id = $request->cart_id;
        $order->coupon_id = $request->coupon_id;

        $order->save();

        return redirect()->route('orders');
    }

    public function orderDelete($id)
    {
        $order = Order::find($id);

        $order_lines = DB::table('order_lines')->where('order_id', $order->id)->get();
        for ($i = 0; $i < count($order_lines); $i++) {
            $order_lines[$i]->delete();
        }
        $order->delete();

        return redirect()->route('orders');
    }

    public function changeStatus($id, $status)
    {
        $order = Order::find($id);
        $order->status = $status;
        $order->save();

        return redirect()->route('orders');
    }
}
