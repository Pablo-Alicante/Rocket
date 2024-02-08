<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartLine;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function carts()
    {
        $carts = Cart::all();

        return response()->json(['carts' => $carts], 404);
    }

    public function cartId($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $cart = Cart::find($id);

        // Verifica si la categoría existe.
        if (! $cart) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Carrito no encontrada'], 404);
        }

        $cart_lines = DB::table('cart_lines')->where('cart_id', $id)->get();
        $productsList = [];
        foreach ($cart_lines as $line) {
            $products = DB::table('products')->where('id', $line->product_id)->get();
            $productsList[] = $products;
        }

        // Devuelve los datos en formato JSON.
        return response()->json(['cart' => $cart, 'cart_lines' => $cart_lines, 'products' => $productsList]);
    }

    public function cartIdProduct($id)
    {
        return response()->json(['cart' => 'cartIdProduct']);
    }

    public function cartIdProductAdd($id, $id_product, Request $request)
    {
        $cart = Cart::find($id);
        //si el producto no está en el carrito, añadirlo
        $product = Product::find($id_product);

        $line = new CartLine();
        $line->cart_id = $cart->id;
        $line->product_id = $product->id;
        $line->units = $request->input('units');
        $total_base = $product->price;
        $line->total_base_price = $total_base;
        $line->total_tax = $total_base * 0.21;
        $line->total_price = $total_base + $line->total_tax;
        $line->save();

        return redirect()->route('carts');
    }

    public function cartIdProductDelete($id, $id_line)
    {
        $cart = Cart::find($id);
        $line = CartLine::find($id_line);
        $line->delete();

        return redirect()->route('carts');
    }

    public function cartIdCoupon($id, $id_coupon)
    {
        $cart = Cart::find($id); //recupero el carrito
        $coupon = Coupon::find($id_coupon); //recupero el cupón
        $cart->coupon_id = $coupon->id; //asigno el cupón al carrito

        $cart->save();

        return redirect()->route('carts');
    }

    public function cartIdCouponDelete($id)
    {
        $cart = Cart::find($id);
        $cart->coupon_id = null;

        $cart->save();

        return redirect()->route('carts');
    }
}
