<?php
    class Login extends Controller{
        public function index(){
            $data['errors'] = [];
            $user = new User();
          
            
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                show($user->validate($_POST));
            }
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    