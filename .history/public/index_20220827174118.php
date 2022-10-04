<?php
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
class app
{
    protected $controller = '_404';
    protected $method = 'index';
    function __construct()
    {
        $url = $this->getURL();
        $filename = "../app/controllers/".ucfirst($url[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = $url[0];
        }else{
            require "../app/controllers/".$this->controller.".php";
        }
        
        $mycontroller= new $this->controller();
        $mymethod = $arr[1] ?? $this->method;  
        if(method_exists($mycontroller, strtolower($url[1])))
        {
            $this->method = strtolower($url[1]);
        }
        
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

$app = new App();

