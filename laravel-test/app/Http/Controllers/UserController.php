<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resto;

class UserController extends Controller
{
    public function hi(){
        echo "hello";
    }


    public function getAllUsers(){
        $users = User::all();
        return response()->json([
            "status" => "success",
            "users" => $users
        ], 200);
    }

}