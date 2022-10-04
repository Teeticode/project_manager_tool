<?php
    class Auth extends Controller{
        public function index(){
            $data['title'] = 'Logim/ Signup';
            $this->view("auth", $data);
        }
    }
