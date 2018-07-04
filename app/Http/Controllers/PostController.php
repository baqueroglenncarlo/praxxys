<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function create(){
    	$this->validate(request(),[
    		'post'=>'required'
    	]);

    	auth()->user()->post(
			new Post(request(['post']))
		);

		return back();
    }   

    public function destroy($id){
    	$post = Post::where('id', $id);
    	$post->delete();
    	
    	return redirect('/home');
    }

}
