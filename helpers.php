<?php

use App\Models\User;

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

function redirect($path){
    header("Location: $path");
    exit;
}

function auth(){
    if(isset($_SESSION['userID'])){
        return User::find($_SESSION['userID']);
    }
    return false;
}
