<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function coupons()
    {
        $coupons = Coupon::all();

        return response()->json(['coupons' => $coupons], 404);
    }

    public function coupon($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $coupon = Coupon::find($id);

        // Verifica si la categoría existe.
        if (! $coupon) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Cupon no encontrada'], 404);
        }

        // Devuelve los datos en formato JSON.
        return response()->json(['coupon' => $coupon], 404);
    }

    public function couponAdd(Request $request)
    {
        $coupon = new Coupon();
        $coupon->uuid = $request->uuid;
        $coupon->active = $request->active;
        $coupon->init_at = $request->init_at;
        $coupon->end_at = $request->end_at;
        $coupon->code = $request->code;

        $coupon->save();

        return redirect()->route('coupons');
    }

    public function CouponDelete($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();

        return redirect()->route('coupons');
    }

    public function CouponUpdate($id, Request $request)
    {
        $coupon = Coupon::find($id);

        $coupon->uuid = $request->uuid;
        $coupon->active = $request->active;
        $coupon->init_at = $request->init_at;
        $coupon->end_at = $request->end_at;
        $coupon->code = $request->code;

        $coupon->save();

        return redirect()->route('coupons');
    }
}
