<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function readAll()
    {
        $regions = Region::all();
        return response()->json($regions, 200);
    }

    public function readOne($id)
    {
        $region = Region::find($id);
        return response()->json(['$region' => $region], 200);
    }

    public function create(Request $request)
    {
        $region = new Region;
        $region->nombre = $request->nombre;
        $region->save();
        return response()->json(['$region' => $region], 201);
    }

    public function update(Request $request, $id)
    {
        $region = Region::find($id);
        if(!$region){
            return response()->json(['error'=> 'Region no encontrada'], 404);
        }
        $region->nombre = $request->nombre;
        $region->save();
        return response()->json(['$region' => $region], 200);
    }
    public function delete($id)
    {
        $region = Region::find($id);
        if(!$region){
            return response()->json(['error'=> 'Region no encontrada'], 404);
        }
        $region->delete();
        return response()->json(['ok' => 'Region eliminada'],204);
    }
    
}
