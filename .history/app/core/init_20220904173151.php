<?php
spl_autoload_register(function($class_name){
    echo "../app/models" .$class_name . ".php";
});



require "config.php";
require "functions.php";
require "database.php";
require "controller.php";
require "app.php";
