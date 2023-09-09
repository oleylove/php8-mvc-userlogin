<?php

namespace App\Controllers;

use App\Models\Post;

class PostController {

    private $postId;

    public function __construct()
    {
        $this->postId = (!empty($_GET['post'])) ? $_GET['post'] : null;
    }
    
    
    public function index() {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $postId = Post::create([
            'title' => $_POST['title'],
            'body' => $_POST['body']
        ]);

        return redirect()->route('posts.show', [
            'post' => $postId
        ]);
    }

    public function edit() {
        return view('posts.edit', [
            'post' =>Post::find($this->postId)
        ]);
    }

    public function update() {
        $post = Post::find($this->postId);
        $post->update([
            'title' => $_POST['title'],
            'body' => $_POST['body']
        ]);

        return redirect()->route('posts.show', [
            'post' => $post->id
        ]);
    }

    public function show() {
        $post = Post::find($this->postId);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function destroy() {
        Post::find($this->postId)->delete();

        return redirect()->route('posts.index');
    }
}
