<?php

class Login extends Controller{
    public function index(){
        if(Auth::logged_in()){
            redirect('home');
            message('Your already logged on', true);
            
        }
        $data['errors'] = [];

        $user = new User();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $row = $user->first([
                'username'=>$_POST['username']
            ]);
            
            if($row){
                
                if(password_verify($_POST['password'],$row->password)){
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