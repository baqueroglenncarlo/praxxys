<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Comment;

class UserController extends Controller
{
    public function index(){
    	return view('Layouts.master');
    }

    public function create(){
    	$image = 'default.png';
    	$this->validate(request(),[
    		'firstname'   => 'required|max:50',
    		'lastname'    => 'required|max:50',
    		'username'    => 'required',
    		'password'    => 'required|confirmed|min:6'
    	]);

    	if(User::where('username', request('request'))->count() > 0){
    		return back();
		}else{
			$register = User::create(request(['firstname', 'lastname', 'middlename', 'username']));
			$register->password = bcrypt(request('password'));
			$register->image = $image;
			$register->save();
            session()->flash('message', 'You can Login now!');
			return redirect('/');
		}
    }

    public function update($id){

        if(request()->hasFile('image')){

            $user = User::find($id);
            $user->image = request()->file('image')->getClientOriginalName();
            request()->file('image')->move(public_path('/image/'),
            request()->file('image')->getClientOriginalName());

            $user->save();
            
        }
            return redirect('/home');
    }

    public function login(){
        $this->validate(request(),[
            'username'=>'required',
            'password'=>'required'
        ]);
    	if(!auth()->attempt(request(['username', 'password']))){
    		return back();
    	}
    	return redirect('/home');
    }

    public function logout(){
    	auth()->logout();
    	return redirect('/');
    }

    public function home(){
    	$posts = Post::latest()->get();
    	$comments = Comment::all();
    	return view('Layouts.home', compact('posts','comments'));
    }
}
