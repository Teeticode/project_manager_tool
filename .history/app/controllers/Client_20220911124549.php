<?php

class Client extends Controller{
    public function dashboard(){
        $data['title'] = "Dashboard";
        $this->view('client/dash');
    }
}