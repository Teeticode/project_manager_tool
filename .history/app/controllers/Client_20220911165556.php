<?php

class Client extends Controller{
    public function index(){
        $data['title'] = "Dashboard";
        $this->view('client/dash', $data);
    }
    public function profile($id){
        $id = $id ?? Auth::getUserid();
        $user= new User();
        $data['row'] = $user->first()
        $data['title'] = "Profile";
        $this->view('client/profile', $data);
    }
}