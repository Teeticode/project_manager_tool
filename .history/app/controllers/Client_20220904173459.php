<?php
    class Client extends Controller{
        public function index(){
            $user = new User();
            $result=$user->validate($_POST);
            var_dump($_POST);
            show($_POST);
            $data['title'] = 'Client';
            $this->view('auth', $data);
        }
    }
    
    

    