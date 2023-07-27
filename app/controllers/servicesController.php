<?php

class servicesController{
    
    function __construct(){
        
    }

    function index(){
        $data = 
    [
        'title' => 'Servicios',
        'bg' => 'dark'
    ];

    View::render('services',$data);
    }
}