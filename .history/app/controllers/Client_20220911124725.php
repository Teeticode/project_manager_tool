<?php

class Client extends Controller{
    public function index(){
        $data['title'] = "Dashboard";
        $this->view('client/dash');
    }
}