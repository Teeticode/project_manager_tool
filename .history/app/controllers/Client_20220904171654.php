<?php
    class Client extends Controller{
        public function index(){
            $user = new User();
            show($_POST);
            $data['title'] = 'Client';
            $this->view('auth', $data);
        }
    }
    
    

    