<?php
    class Signup extends Controller{
        function index(){
            $data["errors"] = [];
            $user = new User();
            $result = $user -> validate($_POST);
            $randint = random_int(20,2000000);
            
            if($_POST['submit']){
                if($user->validate($_POST)){

                    $_POST['date'] = date("Y-m-d H:i:s");
                    $_POST["userid"] = "C-".strval($randint);
                    $_POST['role'] = "client";
                    $user -> insert($_POST);
    
                }
            }
           
            $data["errors"]=$user->errors;
            $data['title'] = 'Signup';
            $this->view('signup', $data);
            
        }
        
    }