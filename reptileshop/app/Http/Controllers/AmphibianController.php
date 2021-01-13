<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AmphibianController extends HomeController
{
    public function view() {
        return view('amphibians.amphibians');
    }

    public function amphibians(){
        if(request()->category) {
            $posts = Post::with('categories')->whereHas('categories')->get();
            $categories = Category::find('Amfibieen');
        }else{
            $posts = Post::all();
            $categories = Category::all();
        }


        return view('home')->with
        ([
            'posts'=>$posts,
            'categories'=>$categories
        ]);
    }
}
