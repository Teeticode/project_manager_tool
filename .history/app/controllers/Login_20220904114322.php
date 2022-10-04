<?php
    class Login extends Controller{
        public function index(){
            $data['title'] = 'reg'
            $this->view("login.reg")
        }
    }
?>