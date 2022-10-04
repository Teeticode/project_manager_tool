<?php
    class Auth extends Controller{
        public function index(){
            $data['title'] = 'Auth';
            $this->view('auth', $data);
        }
    }
