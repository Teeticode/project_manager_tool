<?php

class Profile extends Controller
{
    public function profile($id = null)
    {

        $id = $id ?? Auth::getUserid();
        $user = new User();
        $data['row'] = $user->first(['userid'=>$id]);
        $data['title'] = "profile";
        $this->view("client/profile", $data);
        
    }

   
}