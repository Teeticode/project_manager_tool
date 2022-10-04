<?php

class Home extends Controller
{
    public function index()
    {

        $db = new Database();
        $db -> query();
        $data['title'] = "home";
        $this->view("home", $data);

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