<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

class RestoController extends Controller{
    
    public function getAllRestos($id = null){
        if($id != null){
            $restos = Restaurant::find($id);
            //$restos = $restos? $restos->name : '';
        }else{
            $restos = Restaurant::all();
        }
        
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    }

    public function getRestoByName($name){
        $resto = Restaurant::where("name", "LIKE", "%$name%")->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $resto
        ], 200);
    }

    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->email = $request->email;
        $resto->save();
        
        return response()->json([
            "status" => "Success"
        ], 200);
    }

}
