<?php

class Client extends Controller{
    public function index(){
        $data['title'] = "Dashboard";
        $this->view('client/dash', $data);
    }
    public function profile(){
        $data['title'] = "Profile";
        $this->view('client/profile', $data);
    }
}