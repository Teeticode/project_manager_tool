<?php
    class Signup extends Controller{
        function index(){
            show($_POST);
            $user = new User();
            $result = $user -> validate($_POST);
            if($result){
              $user -> insert($_POST);

            }
            show($_POST);
            show($user->errors);
            $data['title'] = 'Signup';
            $this->view('signup', $data);
        }
        
    }