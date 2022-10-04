<?php
    class Client extends Controller{
        public function index(){
            show($_POST);
            $data['title'] = 'Client';
            $this->view('auth', $data);
        }
    }
    

    