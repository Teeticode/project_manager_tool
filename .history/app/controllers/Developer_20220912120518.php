<?php
class Developer extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            redirect('developer/login');
        }else if(Auth::getrole() !== 'developer'){
            redirect('client/login');
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
        $this->view('dev/login', $data);
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
