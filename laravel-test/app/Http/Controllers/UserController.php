<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resto;

class UserController extends Controller
{


    //Get all users
    public function getAllUsers(){
        $users = User::all();
        return response()->json([
            "status" => "success",
            "users" => $users
        ], 200);
    }
    // signup
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
    //get user by id
    public function getUserById(Request $request){
        $user_id = $request->user_id;
        $user = User::find($user_id);
        return response()->json([
            "status" => "Success",
            "user" => $user,
        ], 200);
    }

    public function logIn(Request $request){

        $email = $request->email;
        $password = hash('sha256', $request->password);
        $user = User::where('email', $email)->first();
        if ($user === null){
            return response()->json([
                "status" => "User not found",
            ], 200);
        }
        if ($password == $user->password){
            return response()->json([
                "status" => "Success",
                "user_id" => $user->user_id,
            ], 200);
        }else{
            return response()->json([
                "status" => "Wrong Input",
            ], 200);
        }
    }
    public function editUser(Request $request){
        
        $user_id = $request->user_id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        User::where("id",$request->id)->update(['F_name'=>$request->fname],['L_name'=>$request->lname]);
        User::where('user_id', $user_id)->update(['name'=>$name],['email'=>$email],['password'=>hash('sha256', $password)]);

        return response()->json([
            "status" => "Done",
        ], 200);
    }


}