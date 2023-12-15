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

    public function readOne($nombre)
    {
        $calle = Calle::where('nombre', $nombre)->first();
        return response()->json($calle , 200);
    }

    public function readCalleForCiudad($ciudad_id)
    {
        $calles = Calle::where('id_ciudad', $ciudad_id)->get();
        return response()->json($calles, 200);
    }

    public function create(Request $request)
    {
        $calle = new Calle;
        $calle->nombre = $request->nombre;
        $calle->id_ciudad = $request->id_ciudad;
        $calle->save();
        return response()->json(['$calle' => $calle], 201);
    }
    
    public function update(Request $request, $id)
    {
        $calle = Calle::find($id);
        if(!$calle){
            return response()->json(['error'=> 'Calle no encontrada'], 404);
        }
        $calle->nombre = $request->nombreNuevo;
        $calle->save();
        return response()->json($calle, 200);
    }

    public function delete($id)
    {
        $calle = Calle::find($id);
        if(!$calle){
            return response()->json(['error'=> 'Calle no encontrada'], 404);
        }
        $calle->delete();
        return response()->json(['ok' => 'Calle eliminada'],204);
    }
}
