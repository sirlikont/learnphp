<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController {
    public function index() {
        $posts = Post::all();     
        include 'views/posts/index.php';
    }
    public function create() {
        include 'views/posts/create.php';
    }
    public function store() {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        //$post->created_at = date('Y-m-d H:i:s');
        $post->created_at = time() * 1000; // Convert to milliseconds
        $post->save();
        redirect('/admin/posts');
    }

    public function show() {
        $post = Post::find($_GET['id']);
        include 'views/posts/show.php';
    }

    public function edit() {
        $post = Post::find($_GET['id']);
        include 'views/posts/edit.php';
    }

    public function update() {
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function destroy() {
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/admin/posts');
    }


}

