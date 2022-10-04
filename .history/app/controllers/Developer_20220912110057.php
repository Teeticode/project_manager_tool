<?php
class Developer extends Controller{
    public function index(){
        $data['title'] = 'Dashboard';
        $this->view('dev/dash', $data);
    }
}