<?php

class app
{
    function __construct()
    {
        print_r(getURL());
    }
    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        return $url;
    } 
}

$app = new App();

