<?php

class homeController{

    function __construct(){
    }

    function index(){

        $data = 
        [
            'title' => 'Sgh Framework',
            'bg' => 'light'
        ];

        View::render('sgh',$data);
        
    }
}