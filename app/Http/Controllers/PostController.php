<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('categories')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $categories = Category::all();
        return view('posts.create' , compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = auth()->user()->posts()->create($request->all());
        $post->categories()->sync($request->categories);

        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        $categories = Category::all();

        return view('posts.edit', compact(['post', 'categories']));
    }

    public function update(Request $request, Post $post){
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
        $post->categories()->sync($request->categories);


        return redirect()->route('posts.index');
    }

    public function destroy(Post $post){
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function filterByCategory(Category $category){
        return view('posts.index', compact('posts'));
    }

}
