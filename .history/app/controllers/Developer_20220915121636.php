<?php
class Developer extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            message('Please login to view dashboard');
            redirect('login');

        }else if(Auth::getrole() !== 'developer'){
            message('Sorry but your not a developer');
            redirect('login');
        }
        $data['title'] = 'Dashboard';
        $this->view('dev/dash', $data);
    }
    public function profile($id = null){
        if(!Auth::logged_in()){
            message('Please login to view dashboard');
            redirect('login');

        }else if(Auth::getrole() !== 'developer'){

            redirect('login');
        }
        $id = $id ?? Auth::getuserid();
        $user = new User();
        $data['row'] = $user->first(['userid'=>$id]);
        $data['title'] = 'Profile';
        $this->view('dev/profile', $data);
    }
    
    public function signup(){
        if(Auth::logged_in()){
            redirect('home');
            message('Your already logged on');
            
        }
        $data["errors"] = [];
        $user = new User();
        $randint = random_int(20,2000000);
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if($user->validate($_POST)){

                $_POST['date'] = date("Y-m-d H:i:s");
                $_POST["userid"] = "D-".strval($randint);
                $_POST['role'] = "developer";
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user -> insert($_POST);
                message($_POST['username']." Your account was created successfully please login");
                redirect('login');
            }
        }
       
        $data["errors"]=$user->errors;
        $data['title'] = 'Signup';
        $this->view('dev/signup', $data);
        
    }
    public function logout(){
        Auth::logout();
        redirect('login');
        message("Log in to your account")
    }
}
