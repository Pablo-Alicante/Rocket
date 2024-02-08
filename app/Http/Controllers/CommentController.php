<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function productCommentAdd($id, Request $request)
    {
        $product = Product::find($id); //creo un nuevo objeto producto

        $comment = new Comment(); // creo un nuevo objeto Image
        $comment->user_id = $request->user_id;
        $comment->product_id = $product->id;
        $comment->comment = $request->comment;

        $comment->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de products
    }

    public function productCommentUpdate($id, Request $request)
    {

        $comment = Comment::find($id); // creo un nuevo objeto Image
        $comment->user_id = $request->user_id;
        $comment->product_id = $request->product_id;
        $comment->comment = $request->comment;

        $comment->save(); // lo guardo en la base de datos

        return redirect()->route('products'); // redirijo a la página de products
    }

    public function productCommentDelete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('products'); // redirijo a la página de products

    }
}
