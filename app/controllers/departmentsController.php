<?php

class departmentsController extends Controller{

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