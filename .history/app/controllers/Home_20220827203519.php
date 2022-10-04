<?php

class Home extends Controller
{
    public function index()
    {
        $this->view("home");
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