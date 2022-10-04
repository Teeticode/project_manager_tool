<?php

class Profile extends Controller
{
    public function index($id = null)
    {

        $id = $id ?? Auth::getuserid();
        $user = new User();
        $row = $user->first(['userid'=>$id]);
        $data['title'] = "profile";
        $this->view("client/profile", $data);
        
    }

   
}