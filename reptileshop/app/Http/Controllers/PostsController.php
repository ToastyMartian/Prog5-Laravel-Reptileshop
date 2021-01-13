<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class PostsController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all posts for admin
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new post for seller & admin
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the request data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:0',
            'category_id' => 'required|between:1, 3',

        ));

        //Store data in db
        $post = new Post;

        $post->name = $request->name;
        $post->description = $request->description;
        $post->price = $request->price;
        $post->category_id = $request->category_id;
        $post->active = true;

        $post->save();

        //Redirect to different page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show specific post for all roles
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit post for specific seller or admin
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the request data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:0',
            'category_id' => 'required|between:1, 3',

        ));

        //Save data to db
        $post = Post::find($id);

        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->category_id = $request->input('category_id');
        $post->active = $request->input('active');

        $post->save();

        //Redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete post for specific seller or admin
        $post = Post::find($id);

        $post->delete();

        //Redirect to home
        return redirect()->route('home');
    }
}
