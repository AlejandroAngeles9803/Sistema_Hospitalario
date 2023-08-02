<?php

class servicesController extends Controller{
    
    function __construct(){
        
    }

    function index(){
        $data = 
    [
        'title' => 'Servicios',
        'bg' => 'dark',
        'nav' => 'dark'
    ];

    View::render('services',$data);
    }
}