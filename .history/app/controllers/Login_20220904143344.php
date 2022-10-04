<?php
    class Login extends Controller{
        public function index(){
            $data['title'] = 'Login';
            $this->view('auth', $data);
        }
    }
    class Signup extends Controller{
        public function index(){
            $data['title'] = 'Signup';
            $this->view('auth', $data);
        }
    }

    