<?php

class app
{
    function __construct($str)
    {
        echo $str;
    }
}

$app = new App('my name');
var_dump($app);
