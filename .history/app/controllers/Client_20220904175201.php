<?php
    class Client extends Controller{
        public function index(){
            $user = new User();
            $result=$user->validate($_POST);
            var_dump($result);
            show($_POST);
            show($user->errors);
            $data['title'] = 'Client';
            $this->view('auth', $data);
        }
    }
    
    

    