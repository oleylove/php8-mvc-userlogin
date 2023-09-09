<?php

use Foundation\Http\Route;

Route::get('/', ['uses' => 'PostController@index','as' => '/']);
Route::get('posts/create', ['uses' => 'PostController@create','as' => 'posts.create']);
Route::post('posts', ['uses' => 'PostController@store','as' => 'posts.store']);
Route::get('posts', ['uses' => 'PostController@show','as' => 'posts.show']);
Route::get('posts/edit', ['uses' => 'PostController@edit','as' => 'posts.edit']);
Route::post('posts/update', ['uses' => 'PostController@update','as' => 'posts.update']);
Route::post('posts/destroy', ['uses' => 'PostController@destroy','as' => 'posts.destroy']);
