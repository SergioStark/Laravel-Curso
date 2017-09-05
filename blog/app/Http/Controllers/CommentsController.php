<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    		
    	     $this->validate(request(),array(          
            'body' => 'required'
            ));

    	$comment = new Comment();
    	$comment->post_id = $post->id;
        $comment->user_id = auth()->user()->id;
    	$comment->body = request('body');    	
        $comment->created_at = date("Y-m-d H:i:s");
    	$comment->save();
    	return back();	
    }
}
