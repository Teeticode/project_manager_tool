<?php

class Profile extends Controller
{
    public function index($id = null)
    {

        $id = $id ?? Auth::getUserid();
        $user = new User();
        $data['row'] = $user->first(['userid'=>$id]);
        $data['title'] = "profile";
        $this->view("client/profile", $data);
        
    }

   
}