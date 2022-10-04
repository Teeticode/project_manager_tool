<?php
    class Login extends Controller{
        public function index(){
            $data['errors'] = [];
            $user = new User();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $row - $user->first([
                    'email'=>$_POST['email']
                ]);
            }
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    