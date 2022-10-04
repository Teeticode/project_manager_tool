<?php
    class Login extends Controller{
        public function index(){
            $data['errors'] = [];

            $user = new User();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $row = $user->first([
                    'username'=>$_POST['username']
                ]);
                if($_POST['terms'] === 1){
                    $data['errors']['terms'] = "Check terms and condition";
                }
                if($row){
                    if($row->password === $_POST['password']){
                        //authenticate
                        $_SESSION['USER_DATA'] = $row;
                        
                    }
                    
                }
                $data['errors']['username'] = "Wrong username or password";
            }
            $data['title'] = 'Login';
            $this->view('login', $data);
        }
    }
    
    

    