<?php

class App
{
    protected $controller = '_404';
    protected $method = 'index';
    public static $page = '_404'; 
    function __construct()
    {
        $url = $this->getURL();
        $filename = "../app/controllers/".ucfirst($url[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = $url[0];
            self::$page = $url[0];
            unset($url[0]);
        }else{
            require "../app/controllers/".$this->controller.".php";
        }
        
        $mycontroller= new $this->controller();
        $mymethod = $url[1] ?? $this->method;
        if(!empty($url[1]))
        {
            if(method_exists($mycontroller, strtolower($mymethod)))
            {
                $this->method = strtolower($mymethod);
                unset($url[1]);
            }
        }
        
        $url = array_values($url);
        call_user_func_array([$mycontroller, $this->method], $url);
    }
    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $arr = explode("/",$url);
        return $arr;
    }
}