<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data = [
            'status' => 'success',
            'data' => $users
        ];
//        return view("user.list",compact("users"));
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = $request->only('name','email','password');
        $user = User::create($data);
        return response()->json(['data'=>$user,'success'=>true]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(["data" => $user]);
    }

    public function update(Request $request,$id)
    {
        $data = $request->only('name','email','password');
        $user = User::findOrFail($id);
        $user->update($data);
        return response()->json(['data'=>$user,'success'=>true]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->posts()->delete(); //xóa post của user trước
        $user->delete();          //xong mới xóa user
        return response()->json(['success'=>true]);
    }
}
