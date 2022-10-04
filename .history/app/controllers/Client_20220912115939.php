<?php

class Client extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            if(Auth::is_client()){
                redirect('client/login');
            }
            
        }
        $data['title'] = "Dashboard";
        $this->view('client/dash', $data);
    }
    public function profile($id=null){
        $id = $id ?? Auth::getUserid();
        $user= new User();
        $data['row'] = $user->first(['userid'=>$id]);
        $data['title'] = "Profile";
        $this->view('client/profile', $data);
    }
    public function login(){
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
        $this->view('client/login', $data);
    }
    public function signup(){
        $data["errors"] = [];
        $user = new User();
        $randint = random_int(20,2000000);
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if($user->validate($_POST)){

                $_POST['date'] = date("Y-m-d H:i:s");
                $_POST["userid"] = "C-".strval($randint);
                $_POST['role'] = "client";
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user -> insert($_POST);
                message($_POST['username']." Your account was created successfully please login");
                redirect('client/login');
            }
        }
       
        $data["errors"]=$user->errors;
        $data['title'] = 'Signup';
        $this->view('client/signup', $data);
        
    }
    public function logout(){
        Auth::logout();
        redirect('client/login');
    }
}