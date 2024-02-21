<?php

namespace App\Http\Controllers;

use App\Models\OrderLine;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderLineController extends Controller
{
    public function orderlines()
    {
        $orderlines = OrderLine::all();

        return response()->json(['orderlines' => $orderlines], 404);
    }

    public function orderlineId($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $orderline = OrderLine::find($id);

        // Verifica si la categoría existe.
        if (! $orderline) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'OrderLine no encontrada'], 404);
        }

        $order = DB::table('orders')->where('id', $orderline->order_id)->get();
        $product = DB::table('products')->where('id', $orderline->product_id)->get();

        // Devuelve los datos en formato JSON.
        return response()->json(['orderline' => $orderline, 'order' => $order, 'product' => $product]);
    }

    public function OrderlineAdd(Request $request)
    {
        $orderline = new OrderLine();
        $orderline->order_id = $request->order_id;
        $orderline->product_id = $request->product_id;

        $product = Product::find( $request->product_id);

        $orderline->units = $request->units;
        $orderline->price_base = $product->price;
        $orderline->price_tax = 0.21;
        $orderline->price_total = ($product->price * $request->units) * (1 + $orderline->price_tax);
        $orderline->save();

        return redirect()->route('orderlines');
    }

    public function orderlineUpdate($id, Request $request)
    {
        $orderline = OrderLine::find($id);
        $orderline->uuid = $request->uuid;
        $orderline->order_id = $request->order_id;
        $orderline->product_id = $request->product_id;
        $orderline->units = $request->units;
        $orderline->price_base = $request->price_base;
        $orderline->price_tax = $request->price_tax;
        $orderline->price_total = $request->price_total;

        $orderline->save();

        return redirect()->route('orderlines');
    }

    public function orderlineDelete($id)
    {
        $category = OrderLine::find($id);
        $category->delete();

        return redirect()->route('orderlines');
    }
}
