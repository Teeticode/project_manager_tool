<?php
    class Signup extends Controller{
        function index(){
            $data['title'] = 'Signup';
        $this->view('signup', $data);
        }
        
    }