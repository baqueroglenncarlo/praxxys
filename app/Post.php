<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
	protected $fillable = [
        'post',
    ];
    
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    public function comment($comment){
    	$this->comments()->create(['user_id'=>auth()->user()->id,'comment'=>$comment]);
    }
}
