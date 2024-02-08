<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function newsletters()
    {
        $newsletters = Newsletter::all();

        return response()->json(['newsletters' => $newsletters], 404);
    }

    public function newsletter($id)
    {
        // Realiza una consulta a la base de datos para obtener la categoría por su ID.
        $newsletter = Newsletter::find($id);

        // Verifica si la categoría existe.
        if (! $newsletter) {
            // Puedes personalizar la respuesta si la categoría no se encuentra.
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        $users = DB::table('users')->where('id', $newsletter->id)->get();

        // Devuelve los datos en formato JSON.
        return response()->json(['newsletter' => $newsletter, 'users' => $users]);
    }

    public function newsletterAdd(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->is_active = $request->is_active;
        $newsletter->user_id = $request->user_id;
        $newsletter->save();

        return redirect()->route('newsletters');
    }

    public function NewsletterDelete($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();

        return redirect()->route('newsletters');
    }
}
