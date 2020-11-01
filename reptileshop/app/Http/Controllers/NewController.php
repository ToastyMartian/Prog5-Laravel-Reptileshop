<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewController extends HomeController
{
    public function show() {
        return view('posts.new');
    }

    public function allPosts()
    {
        $products = Product::all();
        return view('posts.new', ['products'=>$products]);
    }
}
