<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReptileController extends HomeController
{
    public function show($id) {
        $category = Category::find($id);

        if(request()->category) {
            $posts = Post::where('category_id', $category)->get();
        }else{
            $posts = Post::all();
        }
        return view('reptiles.reptiles')->with
        ([
            'category' => $category,
            'posts' => $posts
        ]);
    }

//    public function allReptiles() {
//        if(request()->category) {
//            $posts = Post::where('category_id', 1)->get();
//            //$posts = Post::with('categories')->whereHas('categories')->get();
//            //$categories = Category::all();
//        }else{
//            $posts = Post::all();
//            //$categories = Category::all();
//        }
//        $categories = Category::all();
//
//
//        return view('home')->with
//        ([
//            'posts'=>$posts,
//            'categories'=>$categories
//        ]);
//    }

}
