<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();

        return response()->json(['products' => $products], 404);
    }

    public function product($id)
    {
        $product = Product::find($id);

        $model = DB::table('models')->where('id', $product->model_id)->get();

        $images = DB::table('images')->where('product_id', $product->id)->get();

        $comments = DB::table('comments')->where('product_id', $product->id)->get();

        return response()->json(['product' => $product, 'model' => $model, 'images' => $images, 'comments' => $comments], 404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function productAdd(Request $request)
    {
        //print_r($request->all());
        //  echo die();
        $product = new Product(); // creo un nuevo objeto Product

        $product->uuid = $request->uuid;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->available = $request->available;
        $product->model_id = $request->model_id;

        $product->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de modelos
    }

    public function productUpdate($id, Request $request)
    {

        $product = Product::find($id);

        $product->uuid = $request->uuid;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->available = $request->available;
        $product->model_id = $request->model_id;

        $product->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de modelos
    }

    public function productDelete($id)
    {

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products'); // redirijo a la página de modelos
    }
}
