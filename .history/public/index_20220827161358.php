<?php

class app
{
    function __construct()
    {
        print_r($_GET);
    }
    private function getURL()
    {
        $url = $_GET['url']
    } 
}

$app = new App();

