<?php

class app
{
    function __construct()
    {
        print_r($this->getURL());
    }
    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        $arr = explode("/",$url);
        return $arr;
    } 
}

$app = new App();

