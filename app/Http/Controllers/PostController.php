<?php

namespace App\Http\Controllers;
use App\Models\{
    Post
};
use App\Http\Requests\{
    PostRequest
};
use Illuminate\Http\Request;

class PostController extends Controller
{
    // retornando a listagem de posts
    public function index()
    {

        $posts = Post::all();
        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }
    public function store(PostRequest $request)
    {
        $post  = Post::create($request->all());
        
        return redirect()->route('posts.index');
    }
}
