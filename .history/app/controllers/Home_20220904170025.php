<?php

class Home extends Controller
{
    public function index()
    {

        
        $data['title'] = "home";
        $this->view("home", $data);
        $db = new Database();
        $db->create_table();
    }

    public function edit()
    {
        echo "home editing";
    }

    public function delete($id)
    {
        echo "home deleting ".$id;
    }
}