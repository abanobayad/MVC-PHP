<?php

class HomeController
{

    public function index()
    {
        $data['title'] = "Homepage";
        $data['content'] = "Homepage Content";
        
        View::load('home' , $data);
    } 
}