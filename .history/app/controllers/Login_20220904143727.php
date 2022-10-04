<?php
    class Login extends Controller{
        public function index(){
            $data['title'] = 'Login';
            $this->view('auth', $data);
        }
    }
    

    