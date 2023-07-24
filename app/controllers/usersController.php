<?php

class usersController{
    function __construct(){
        echo 'Ejecutando'.__CLASS__;
    }

    function index(){
        echo 'Prueba';
    }
    function ver($id=null){
        echo sprintf('Perfil del usuario con id %s en la clase %s', $id,__ClASS__);
    }
}