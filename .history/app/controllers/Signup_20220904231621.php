<?php
    class Signup extends Controller{
        function index(){
            $user = new User();
            show($user->validate($_POST));
            $data['title'] = 'Signup';
        $this->view('signup', $data);
        }
        
    }