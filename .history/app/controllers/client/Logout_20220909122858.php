<?php

class Logout{
    public function index(){
        Auth::logout();
        redirect('client/login');
    }
}