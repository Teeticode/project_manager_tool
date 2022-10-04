<?php
    class Login extends Controller{
        public function index(){
            $user = new User();
          
            show($_POST);
            show($user->errors);
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                show($user->validate($_POST));
            }
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    