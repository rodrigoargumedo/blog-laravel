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

    public function getPost(Post $post) // or function show($id)
    {
      return $post;
      return view('posts.shoq', compact('post'));
    }
}
