<?php

Route::get('/', 'UserController@index');
Route::get('/home', 'UserController@home');
Route::get('/logout', 'UserController@logout');
Route::post('/update/{id}', 'UserController@update'); 

Route::post('/register', 'UserController@create');
Route::post('/login', 'UserController@login'); 
Route::post('/comment/{post}', 'CommentController@create');

Route::post('/post', 'PostController@create');
Route::get('/destroy/{id}', 'PostController@destroy'); 


