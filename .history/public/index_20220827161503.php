<?php

class app
{
    function __construct()
    {
        getURL();
    }
    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        return $url;
    } 
}

$app = new App();

