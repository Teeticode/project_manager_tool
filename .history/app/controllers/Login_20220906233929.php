<?php
    class Login extends Controller{
        public function index(){
            $data['errors'] = [];

            $user = new User();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $row = $user->first([
                    'username'=>$_POST['username']
                ]);
                
                if($row){
                    if($row->password === $_POST['password']){
                        //authenticate
                        Auth::authenticate($row);
                        redirect("home");
                    }
                    
                }
                $data['errors']['username'] = "Wrong username or password";
            }
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    