<?php
    class Signup extends Controller{
        function index(){
            show($_POST);
            $user = new User();
            $result = $user -> validate($_POST);
            $randint = random_int(20,2000000);
            if($user->validate($_POST)){

                $_POST['date'] = date("Y-m-d H:i:s");
                $_POST["userid"] = "C-".strval($randint);
                $_POST['role'] = "client";
                $user -> insert($_POST);

            }
            show($_POST);
            show($user->errors);
            
            $data['title'] = 'Signup';
            $this->view('signup', $data);
        }
        
    }