<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function productImageAdd($id, Request $request)
    {
        $product = Product::find($id); //creo un nuevo objeto producto

        $image = new Image(); // creo un nuevo objeto Image
        $image->image = $request->image;
        $image->product_id = $product->id;
        $image->order = $request->order;

        $image->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de products
    }

    public function productImageUpdate($id, Request $request)
    {

        $image = Image::find($id); // creo un nuevo objeto Image
        $image->image = $request->image;
        $image->product_id = $request->product_id;
        $image->order = $request->order;

        $image->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de products
    }

    public function productImageDelete($id)
    {
        $image = Image::find($id);
        $image->delete();

        return redirect()->route('products'); // redirijo a la página de products

    }
}
