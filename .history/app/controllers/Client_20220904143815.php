<?php
    class Client extends Controller{
        public function index(){
            $data['title'] = 'Client';
            $this->view('auth', $data);
        }
    }
    

    