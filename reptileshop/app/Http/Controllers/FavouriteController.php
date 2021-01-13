<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Favourite;

class FavouriteController extends HomeController
{
    public function favourites()
    {
        $user_id = Auth::id();
        $categories = Category::all();
        $posts = Favourite::wherePost_id()->get();
        $favourites = Favourite::where('user_id', $user_id)->get();

        return view('profile.favourites')->with
        ([
            'posts'=>$posts,
            'categories'=>$categories,
            'favourites'=>$favourites
        ]);
    }

    public function add_favourite($id)
    {
        $post = Post::find($id);
        $user_id = Auth::id();
        //Store favourite in db
        $favourites = new Favourite;

        $favourites->post_id = $post->id;
        $favourites->user_id = $user_id;

        $favourites->save();

        //Redirect to different page
        return redirect()->route('profile.favourites');
    }

    public function delete_favourite($id)
    {
        //Delete favourite for current logged in user
        $favourite = Favourite::find($id);

        $favourite->delete();

        //Redirect to home
        return redirect()->route('home');
    }
}
