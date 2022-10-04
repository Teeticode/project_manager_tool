<?php

class Profile extends Controller
{
    public function index($id = null)
    {

        $id = $id ?? Auth::getuserid();
        
        $data['title'] = "profile";
        $this->view("client/profile", $data);
        
    }

   
}