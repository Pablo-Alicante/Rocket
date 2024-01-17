<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return response()->json(['carrito' => 'carrito']);
    }

    public function cartId($id)
    {
        $carrito = Cart::find($id);

        return response()->json($carrito);
    }

    public function cartIdProduct($id)
    {
        return response()->json(['carrito' => 'carritoIdProduct']);
    }

    public function cartIdProductAdd($id)
    {
        $carrito = Cart::find($id);
        //si el producto no está en el carrito, añadirlo

            $lines = OrderLine::where('id_cart,'XXX)->where('id_product', $id)->first();





        // si el producto ya está en el carrito, sumarle/restarle 1 a la cantidad

        // llamar a la función leer el carrito

        // devolver el carrito al frontar

        return $carrito;
    }

    public function cartIdProductDelete($id, $id_line)
    {
        // borro la linea del carrito, las 50 unidades de golpe

        return response()->json(['carrito' => 'carritoIdProductDelete']);
    }

    public function cartIdCoupon($id, Request $request)
    {
        $carrito = Cart::find($id); //recupero el carrito

        $code = $request->input('code');

        $code = Coupon::where('code', $code)->firstorfail();

        $carrito->coupon_id = $code->id;

        $carrito->save();

        return response()->json(['carrito' => 'carritoIdCoupon']);
    }

    private function loadCart($cart)
    {
        // sacar las lineas del carrito
        $cart->load('cartLines.product');

        // recorrer las lineas del carrito
        // meter foreach
        foreach ($cart->lines as $line) {
            $cart->total_price += $line->total_price;
            $cart->units += $line->units;

        }

        // hago los cálculos de añadir productos y cupones y el precio total

        $carrito->coste_transportista = 0;
        $carrito->total_price = 0;
        $carrito->coupon = 0;
        $carrito->total_base = 0;
        $carrito->total_tax = 0;
        $carrito->total_pagar = 0;
        // devuelvo el carrito al json, guardo el total

        return $carrito;
    }

    public function cartIdCouponDelete($id)
    {
        return response()->json(['carrito' => 'carritoIdCouponDelete']);
    }
}
