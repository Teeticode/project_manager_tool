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
}