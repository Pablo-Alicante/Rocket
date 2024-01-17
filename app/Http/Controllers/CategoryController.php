<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function category($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $categoria = Category::find($id);

        // Verifica si la categoría existe.
        if (! $categoria) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        // Devuelve los datos en formato JSON.
        return response()->json($categoria, 200, [], JSON_PRETTY_PRINT);
    }

    public function categoryProducts($id)
    {
        // Realiza una consulta a la base de datos para obtener los productos de la categoría por su ID.
        $productosCategoria = Category::find($id)->productos;

        // Verifica si la categoría existe.
        if (! $productosCategoria) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        // Devuelve los productos en formato JSON.
        return response()->json($productosCategoria, 200, [], JSON_PRETTY_PRINT);
    }
}
