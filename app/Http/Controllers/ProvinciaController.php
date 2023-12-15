<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;

class ProvinciaController extends Controller
{
    //
    public function readAll()
    {
        $provincias = Provincia::all();
        return response()->json(['$provincias' => $provincias], 200);
    }

    public function readOne($id)
    {
        $provincia = Provincia::find($id);
        return response()->json($provincia, 200);
    }

    public function readProvinciaForRegion($region_id)
    {
        $provincias = Provincia::where('id_region', $region_id)->get();
        return response()->json($provincias, 200);
    }
}
