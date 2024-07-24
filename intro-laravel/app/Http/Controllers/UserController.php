<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_age($age = "10")
    {
        echo "hello from api.php " . $age . "from inside the controller";
    }
    public function greet(Request $req)
    {

        echo "hello $req->name from inside the user controller";
    }
    public function insert_user(Request $req)
    {
        $user = User::insert([
            "name" => $req->name,
            "email" => $req->email,
            "password" => $req->password,
            "age" => $req->password
        ]);
        return response()->json([
            "message" => "created successfully",
            "status" => "success"
        ], 201);
    }
    public function insert_user_way_2(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->age = $req->age;
        $user->save();
        return response()->json([
            "message" => "created successfully",
            "status" => "success"
        ], 201);
    }
    public function insert_user_way_3(Request $req)
    {
        $user = User::create([
            "name" => $req->name,
            "email" => $req->email,
            "password" => $req->password,
            "age" => $req->age
        ]);
        return response()->json([
            "message" => "created successfully",
            "status" => "success"
        ], 201);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        $user2 = User::where("id", $id)->first();
        $user3 = User::where("id", $id)->get()[0];
        // $user3 = User::where("email", 'like', "%$id%")->get();
        return response()->json([
            "user" => $user,
            "user2" => $user2,
            "user3" => $user3
        ]);
    }
    public function getUsers()
    {
        $users = User::all();
        return response()->json([
            "users" => $users
        ]);
    }
}
