<?php 

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlis($value){
    // compare path portion only (ignore query string)
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $path === $value;
}


?>