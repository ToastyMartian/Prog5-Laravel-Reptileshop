<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;

class AdminController extends HomeController
{
    public function show() {
        $users = User::all();
        $roles = Role::all();

        return view('admin')->with
        ([
            'users'=>$users,
            'roles'=>$roles
        ]);
    }

    public function deactivate($id) {
        $post = Post::findOrFail($id);
        if($post->active == true){
            $post->active = false;
        } else {
            $post->active = true;
        }

        $post->save();

        //Redirect to posts.index
        return redirect()->route('posts.index');
    }
}
