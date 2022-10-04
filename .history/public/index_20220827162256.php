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
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $arr = explode("/",$url);
        return $arr;
    } 
}

$app = new App();

