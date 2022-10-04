<?php

class Client extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            message('You need to be logged in to view dashboard');
            redirect('login');
            
        }else if(Auth::getrole() !== 'client'){
            message('Sorry but this is not a client account');
            redirect('login');
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
   
    public function signup(){
        if(Auth::logged_in()){
            redirect('home')
        }
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
                redirect('login');
            }
        }
       
        $data["errors"]=$user->errors;
        $data['title'] = 'Signup';
        $this->view('client/signup', $data);
        
    }
    public function logout(){
        Auth::logout();
        redirect('login');
    }
}