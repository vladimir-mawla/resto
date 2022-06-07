<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    //Get restaurant by name
    public function getResto(Request $request){
        $name = $request->name;
        $resto = Restaurant::where("name", "LIKE", "%$name%")->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $resto
        ], 200);
    }
    //Get all restaurants
    public function getAllRestos(){
        $restaurants = Restaurant::all();
        return response()->json([
            "status" => "success",
            "users" => $restaurants
        ], 200);
    }

        // add restaurant
        public function addResto(Request $request){

            $restaurants = new Restaurant;
            $restaurants->name = $request->name;
            $restaurants->location = $request->location;
            $restaurants->save();
    
    
            return response()->json([
                "status" => "Success",
            ], 200);
        }

}
