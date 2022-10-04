<?php
    class Login extends Controller{
        public function index(){
            $data['title'] = 'auth'
            $this->view("auth", $data)
        }
    }
