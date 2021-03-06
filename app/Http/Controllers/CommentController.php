<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function create(Post $post){
    	$post->comment(request('comment', 'user_id'));

    	return redirect('/home');
    }
}
