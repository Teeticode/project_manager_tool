<?php
spl_autoload_register(function(){
    echo "here";
});



require "config.php";
require "functions.php";
require "database.php";
require "controller.php";
require "app.php";
