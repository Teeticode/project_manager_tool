<?php

class Profile extends Controller
{
    public function index()
    {

        
        $data['title'] = "profile";
        $this->view("dev/profile", $data);
        
    }

   
}