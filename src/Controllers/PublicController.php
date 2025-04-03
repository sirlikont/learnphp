<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $heroTitle = 'World news';
        $posts = [
            ['title' => 'World news 1', 'author' => 'Kaspar', 'body' => 'some content here 1'],
            ['title' => 'World news 2', 'author' => 'Martin', 'body' => 'some content here 2'],
            ['title' => 'World news 3', 'author' => 'Peter', 'body' => 'some content here 3'],
            ['title' => 'World news 4', 'author' => 'Pets', 'body' => 'some content here 4'],
        ];
        include 'views/index.php';
    }

    public function us() {
        $heroTitle = 'U.S news';
        $posts = [
            ['title' => 'U.S news 1', 'author' => 'Lauri', 'body' => 'some content here 1'],
            ['title' => 'U.S news 2', 'author' => 'Jaanika', 'body' => 'some content here 2'],
            ['title' => 'U.S news 3', 'author' => 'Ethel', 'body' => 'some content here 3'],
            ['title' => 'U.S news 4', 'author' => 'Kaur', 'body' => 'some content here 4'],
        ];
        include 'views/us.php';
    }

    public function form(){
        $name = $_GET['name'] ?? null;
        $age = $_GET['age'] ?? null;
        include 'views/form.php';
    }

    public function answer(){
        dump($_GET, $_POST);
    }

    public function getAnswer(){
        dump($_GET);
    }
}