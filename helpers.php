<?php

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

function redirect($path){
    header("Location: $path");
    exit;
}