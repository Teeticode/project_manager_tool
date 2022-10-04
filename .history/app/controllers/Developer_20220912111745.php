<?php
class Developer extends Controller{
    public function index(){
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
}
