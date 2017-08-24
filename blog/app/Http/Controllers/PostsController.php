<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts=Post::all();
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
    	//dd(request()->all());
    	/*$post = new Post();
    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();*/

    	//equivalente a esto:

    	Post::create(
    		request(['title', 'body'])
    		);

    	//Post::create(request()->all()); //mandar todos los datos

    	return redirect('/');
    }
}
