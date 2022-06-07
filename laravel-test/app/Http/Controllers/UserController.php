<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resto;

class UserController extends Controller
{



    public function getAllUsers(){
        $users = User::all();
        return response()->json([
            "status" => "success",
            "users" => $users
        ], 200);
    }

    public function signUp(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('sha256', $request->password);
        $user->save();


        return response()->json([
            "status" => "Success",
        ], 200);
    }

    public function getUserById(){
        $user = User::find(1);
        return response()->json([
            "status" => "Success",
            "user" => $user,
        ], 200);
    }


    public function hi(){
        echo"hi hello ";
    }


}