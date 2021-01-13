<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function view() {
        return view('home');
    }

    public function allPosts() {

        if(request()->category) {
            $posts = Post::where('category_id', request('category'))->where('active', true)->get();
        }else{
            $posts = Post::where('active', true)->get();
        }
        $categories = Category::all();
        $favourites = Favourite::all();


        return view('home')->with
        ([
            'posts'=>$posts,
            'categories'=>$categories,
            'favourites'=>$favourites
        ]);

    }

    public function search()
    {
        $search = $_GET['query'];
        $categories = Category::all();
        $posts = Post::where('name','LIKE','%'.$search.'%')->where('active', true)->get();


        return view('posts.search', compact('posts'))->with('category', $categories);
    }

    public function filter($id)
    {
        $category = Category::find($id);

        if(request()->category) {
            $posts = Post::where('category_id', $category)->where('active', true)->get();
        }else{
            $posts = Post::all();
        }
        return view('home')->with
        ([
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
