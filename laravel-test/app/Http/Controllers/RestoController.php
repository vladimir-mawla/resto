<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    public function getResto(Request $request){
        $name = $request->name;
        $resto = Restaurant::where("name", "LIKE", "%$name%")->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $resto
        ], 200);
    }
}
