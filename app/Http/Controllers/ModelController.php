<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    public function models()
    {
        $models = Model::all();

        return response()->json(['models' => $models], 404);
    }

    public function model($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $model = Model::find($id);

        // Verifica si la categoría existe.
        if (! $model) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Modelo no encontrada'], 404);
        }

        $category = DB::table('categories')->where('id', $model->category_id)->get();
        $products = DB::table('products')->where('model_id', $model->id)->get();

        // Devuelve los datos en formato JSON.
        return response()->json(['model' => $model, 'category' => $category, 'products' => $products]);
    }

    public function modelComment($id)
    {
        return 'modelComment';
    }

    public function modelCommentAdd($id)
    {
        return 'modelCommentAdd';
    }

    public function ModelAdd(Request $request)
    {
        $model = new Model(); // creo un nuevo objeto Model

        $model->name = $request->name;
        $model->code = $request->code;
        $model->description = $request->description;
        $model->image = $request->image;
        $model->category_id = $request->category_id;

        $model->save(); // lo guardo en la base de datos

        return redirect()->route('models'); // redirijo a la página de modelos
    }

    public function modelDelete($id)
    {
        $model = Model::find($id);
        $model->delete();

        return redirect()->route('models');
    }

    public function modelUpdate($id, Request $request)
    {
        $model = Model::find($id);
        $model->name = $request->name;
        $model->code = $request->code;
        $model->description = $request->description;
        $model->image = $request->image;
        $model->category_id = $request->category_id;
        $model->save();

        return redirect()->route('models');
    }
}
