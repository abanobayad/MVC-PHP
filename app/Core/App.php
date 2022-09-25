<?php

//Frontend Controller

class App 
{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        $this->render();
    }


    private function prepareURL()
    {
        $url =  $_SERVER['QUERY_STRING'];   
        if(!empty($url))
        {
            $url = trim($url,"/"); // remove extra slash
            $url = explode("/" , $url);  //divide url by "/"

            //Define Controller
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller" :"HomeController";

            //Define Methods
            $this->action = isset($url[1]) ? $url[1] : "index";

            //Define Parameters
            unset($url[0],$url[1]);  //Remove Controller & Action from url array
            $this->params = !empty($url) ? array_values($url) : [];
        }

        /*
                echo $this->controller . "<br>";
                echo $this->action . "<br>";
                var_dump($this->params);
                var_dump($url);
                index 0             => controller
                index 1             => action
                index 2,3,4.....    => params
        */
    }

    private function render()
    {
        if(class_exists($this->controller))
            {
                $controller = new $this->controller;  //Create Object from the class to check the methods in it.
                if (method_exists($controller , $this->action))
                    {
                        call_user_func_array([$controller , $this->action] , $this->params);
                    } 
                else
                    {
                        echo $this->action . " Function Not Exist";
                    }
                
            }
        else
            {
                echo $this->controller . " Not Exist";
            }
    }


}