<?php

class departmentsController{

    function __construct(){
    }

    function index(){

        $data = 
        [
            'title' => 'Sgh Framework',
            'bg' => 'blue'
        ];

        View::render('departments',$data);
        
    }
}