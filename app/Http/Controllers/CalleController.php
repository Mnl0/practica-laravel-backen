<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calle;

class CalleController extends Controller
{
    //
    public function readAll()
    {
        $calles = Calle::all();
        return response()->json(['$calles' => $calles], 200);
    }

    public function readOne($id)
    {
        $calle = Calle::find($id);
        return response()->json(['$calle' => $calle], 200);
    }

    public function readCalleForCiudad($ciudad_id)
    {
        $calles = Calle::where('id_ciudad', $ciudad_id)->get();
        return response()->json($calles, 200);
    }
}
