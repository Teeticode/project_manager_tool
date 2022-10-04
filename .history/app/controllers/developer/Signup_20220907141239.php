<?php
    class Signup extends Controller{
        function index(){
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
        
    }