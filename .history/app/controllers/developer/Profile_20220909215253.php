<?php

class Home extends Controller
{
    public function index()
    {

        
        $data['title'] = "home";
        $this->view("dev/profile", $data);
        
    }

   
}