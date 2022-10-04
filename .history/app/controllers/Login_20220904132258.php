<?php
    class Auth extends Controller{
        public function index(){
            $data['title'] = 'Login / Signup';
            $this->view('login', $data);
        }
    }
