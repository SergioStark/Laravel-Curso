<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	//$posts=Post::all();
        $posts=Post::latest()->get();
    	return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {    	
    	return view('posts.show',compact('post'));
    }

    public function create()
    {
		return view('posts.create');
    }

    public function store()
    {
        //valida que estos campos no se envien vacios.
        $this->validate(request(),array(
            'title' => 'required',
            'body' => 'required'
            ));

    	//dd(request()->all());
    	$post = new Post();
    	$post->title = request('title');
    	$post->body = request('body');
        $post->user_id = auth()->user()->id;
        $post->created_at = date('Y-m-d H:i:s');
    	$post->save();

    	//equivalente a esto:

    	/*Post::create(
    		request(['title', 'body'])
    		);*/

    	//Post::create(request()->all()); //mandar todos los datos

    	return redirect('/');
    }
}
