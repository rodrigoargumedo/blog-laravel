<?php

namespace Blog\Http\Controllers;

use Blog\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /posts/
    public function index()
    {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    public function getPost(Post $post) // or public function show(Post $post)
    {
      // GET /posts/{posts}/
      return view('posts.show', compact('post'));
    }

    public function new()
    {
      // GET /posts/new
      return view('posts.new');
    }

    public function create()
    {
      
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      Post::create(request(['title', 'body']));

      return redirect('/posts/');
    }
}
