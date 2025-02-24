<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        auth()->user()->posts()->create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('posts.index');
    }

}
