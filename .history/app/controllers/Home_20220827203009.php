<?php

class Home
{
    public function index($id)
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