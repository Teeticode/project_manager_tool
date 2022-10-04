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

    public function delete($id, $id2=null, $id3=null)
    {
        echo "home deleting".$id3;
    }
}