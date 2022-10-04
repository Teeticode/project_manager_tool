<?php
class Developer extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            message('please login to view dashboard');
            redirect('developer/login');

        }else if(Auth::getrole() !== 'developer'){
            message('sorry but your not a developer');
            redirect('developer/login');
        }
        $data['title'] = 'Dashboard';
        $this->view('dev/dash', $data);
    }
    public function profile($id = null){
        $id = $id ?? Auth::getuserid();
        $user = new User();
        $data['row'] = $user->first(['userid'=>$id]);
        $data['title'] = 'Profile';
        $this->view('dev/profile', $data);
    }
    
    public function signup(){
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
                redirect('developer/login');
            }
        }
       
        $data["errors"]=$user->errors;
        $data['title'] = 'Signup';
        $this->view('dev/signup', $data);
        
    }
    public function logout(){
        Auth::logout();
        redirect('developer/login');
    }
}
