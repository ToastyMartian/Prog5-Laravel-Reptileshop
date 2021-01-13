<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewController extends HomeController
{
    public function show() {
        return view('posts.new');
    }

    public function allPosts()
    {
        $products = Post::all();
        return view('posts.new', ['products'=>$products]);
    }
}
