<?php

class Home extends Controller
{
    public function index()
    {
        $data['var'] = "This is my home var";
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