<?php

class Controller
{
    function view($view)
    {
        $filename = "../app/view/".$view.".view.php";
        if(file_exists($filename))
        {
            require $filename;
        }else{
            echo "could not find view file: ".$filename;
        }
    }
}