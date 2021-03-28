<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        // return $request->input();  // JSON input

        $post = Post::create($request->input());
        return $post;
    }

    public function update(Request $request)
    {
    }
}
