<?php

class Home
{
    public function index($id2)
    {
        echo "home view page".$id2;
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