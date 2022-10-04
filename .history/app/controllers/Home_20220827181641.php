<?php

class Home
{
    public function index()
    {
        echo "home view page";
    }

    public function edit()
    {
        echo "home editing";
    }

    public function delete($id)
    {
        echo "home deleting".$id;
    }
}