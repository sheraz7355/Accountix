<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/login.php',
    '/Dashboard' => 'controller/Dashboard.php',
    '/Transactions' => 'controller/Transactions.php',
    '/Revenue' => 'controller/Revenue.php',
    '/Expenses' => 'controller/Expenses.php',
    '/Inventory' => 'controller/Inventory.php',
    '/Accounts' => 'controller/Accounts.php',
    '/Setting' => 'controller/Setting.php',
];

routeToController($uri, $routes);

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        return require $routes[$uri];
    }else{
        return abort(404);
    }
}
function abort($error=404){
    http_response_code($error);
    if($error == 404){
        require "views/404.views.php";
    }
}


?>