<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return response()->json(['categories' => $categories], 404);
    }

    public function category($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $category = Category::find($id);

        // Verifica si la categoría existe.
        if (! $category) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        $models = DB::table('models')->where('category_id', $id)->get();

        // Devuelve los datos en formato JSON.
        return response()->json(['category' => $category, 'models' => $models]);
    }

    public function categoryProducts($id)
    {
        // Realiza una consulta a la base de datos para obtener los productos de la categoría por su ID.
        $categoryProducts = Category::find($id)->products;

        // Verifica si la categoría existe.
        if (! $categoryProducts) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        // Devuelve los productos en formato JSON.
        return response()->json($categoryProducts, 200, [], JSON_PRETTY_PRINT);
    }

    public function CategoryAdd(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories');
    }

    public function CategoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories');
    }

    public function CategoryUpdate($id, Request $request)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('categories');
    }
}
