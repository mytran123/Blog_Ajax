<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data = $request->only('title','content','image','user_id');
        $post = Post::create($data);
        return response()->json(['data' => $post,'success'=>true]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json(['data'=>$post]);
    }

    public function edit()
    {

    }

    public function update(Request $request,$id)
    {
        $data = $request->only('title','content','image','user_id');
        $post = Post::findOrFail($id);
        $post->update($data);
        return response()->json(['data'=>$book,'success'=>true]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(['success'=>true]);
    }
}
