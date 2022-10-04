<?php
    class Login extends Controller{
        public function index(){
            $user = new User();
            $result=$user->validate($_POST);
            var_dump($result);
            show($_POST);
            show($user->errors);
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    