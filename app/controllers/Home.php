<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "home";
        $this->view("home", $data);
    }

   
}