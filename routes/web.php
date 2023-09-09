<?php

use Foundation\Http\Route;

Route::get('/', ['uses' => 'HomeController@index','as' => '/']);


Route::get('posts', ['uses' => 'PostController@index','as' => 'posts.index']);
Route::get('posts/create', ['uses' => 'PostController@create','as' => 'posts.create']);
Route::post('posts/store', ['uses' => 'PostController@store','as' => 'posts.store']);
Route::get('posts/show', ['uses' => 'PostController@show','as' => 'posts.show']);
Route::get('posts/edit', ['uses' => 'PostController@edit','as' => 'posts.edit']);
Route::post('posts/update', ['uses' => 'PostController@update','as' => 'posts.update']);
Route::post('posts/destroy', ['uses' => 'PostController@destroy','as' => 'posts.destroy']);
