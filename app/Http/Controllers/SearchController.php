<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $query = Product::query();

        if ($request->has('name')) {
            $name = $request->name;
            $query->where(function ($query) use ($name) {
                $query->whereRaw('LOWER(name) like ?', ['%'.Str::lower($name).'%']);
            });
        }

        if ($request->has('description')) {
            $description = $request->description;
            $query->where(function ($query) use ($description) {
                $query->whereRaw('LOWER(description) like ?', ['%'.Str::lower($description).'%']);
            });
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $query->where('stock', '>', 0);
        $query->where('available', true);
        $resultados = $query->get();

        return response()->json(['resultados' => $resultados], 404);
    }

    public function searchUser(Request $request)
    {
        $query = User::query();

        if ($request->has('name')) {
            $name = $request->name;
            $query->where(function ($query) use ($name) {
                $query->whereRaw('LOWER(name) like ?', ['%'.Str::lower($name).'%']);
            });
        }

        if ($request->has('surname')) {
            $surname = $request->surname;
            $query->where(function ($query) use ($surname) {
                $query->whereRaw('LOWER(surname) like ?', ['%'.Str::lower($surname).'%']);
            });
        }

        if ($request->has('email')) {
            $email = $request->email;
            $query->where(function ($query) use ($email) {
                $query->whereRaw('LOWER(email) like ?', ['%'.Str::lower($email).'%']);
            });
        }

        if ($request->has('phone')) {
            $phone = $request->phone;
            $query->where(function ($query) use ($phone) {
                $query->whereRaw('LOWER(phone) like ?', ['%'.Str::lower($phone).'%']);
            });
        }

        if ($request->has('address')) {
            $address = $request->address;
            $query->where(function ($query) use ($address) {
                $query->whereRaw('LOWER(address) like ?', ['%'.Str::lower($address).'%']);
            });
        }

        if ($request->filled('birthday_min')) {
            $query->where('birthday', '<=', $request->birthday_min);
        }

        if ($request->filled('birthday_max')) {
            $query->where('birthday', '>=', $request->birthday_max);
        }

        if ($request->filled('active')) {
            $query->where('active', 'true', $request->active);
        }

        if ($request->filled('unsuscribe')) {
            $query->where('active', 'false', $request->unsuscribe);
        }

        if ($request->filled('unsuscribe_at_min')) {
            $query->where('unsuscribe_at', '<=', $request->unsuscribe_at_min);
        }

        if ($request->filled('unsuscribe_at_max')) {
            $query->where('unsuscribe_at', '>=', $request->unsuscribe_at_max);
        }

        $resultados = $query->get();

        return response()->json(['resultados' => $resultados], 404);
    }

    public function searchOrder(Request $request)
    {
        $query = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.id', 'orders.user_id', 'users.name', 'users.surname', 'orders.status');

        if ($request->has('status')) {
            $query->where('status', '=', $request->status);
        }

        if ($request->has('order_id')) {
            $query->where('orders.id', $request->order_id);
        }

        if ($request->has('user_id')) {
            $query->where('users.id', $request->user_id);
        }

        if ($request->has('user_name')) {
            $name = $request->user_name;
            $query->where(function ($query) use ($name) {
                $query->whereRaw('LOWER(users.name) like ?', ['%'.Str::lower($name).'%']);
            });
        }

        if ($request->has('user_surname')) {
            $surname = $request->user_surname;
            $query->where(function ($query) use ($surname) {
                $query->whereRaw('LOWER(users.surname) like ?', ['%'.Str::lower($surname).'%']);
            });
        }

        $resultados = $query->get();

        return response()->json(['resultados' => $resultados], 404);
    }
}
