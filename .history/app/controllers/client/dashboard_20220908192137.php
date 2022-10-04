<?php
    class Dashboard extends Controller{
        public function index(){
            $data['errors'] = [];

            
            $data['title'] = 'Dashboard';
            $this->view('client/dash', $data);
        }
    }