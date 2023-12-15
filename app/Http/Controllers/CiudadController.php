<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    //
    public function readAll()
    {
        $ciudades = Ciudad::all();
        return response()->json(['$ciudades' => $ciudades], 200);
    }

    public function readOne($id)
    {
        $ciudad = Ciudad::find($id);
        return response()->json($ciudad, 200);
    }

    public function readCiudadForProvincia($provincia_id)
    {
        $ciudades = Ciudad::where('id_provincia', $provincia_id)->get();
        return response()->json($ciudades, 200);
    }
}
