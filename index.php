<?php 
require "Database.php";
$config = require "configure.php";
$db = new Database($config[1]);
require "router.php";



?>