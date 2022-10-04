<?php
    class Signup extends Controller{
        function index(){
            $user = new User();
            $result = $user -> validate($_POST);
            var_dump($result);
            show($_POST)
            show($user->errors);
            $data['title'] = 'Signup';
            $this->view('signup', $data);
        }
        
    }