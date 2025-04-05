<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
        
        //setcookie('mycookie', 'tasty', time() + 3600, null, null, true, false);
        //dump($_COOKIE);
        //$_SESSION['id'] = 32;
        //dump($_SESSION);
        $posts = Post::all();
        $heroTitle = 'World news';        
        include 'views/index.php';
    }

    public function us() {
        $heroTitle = 'U.S news';
        $posts = Post::all();
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

