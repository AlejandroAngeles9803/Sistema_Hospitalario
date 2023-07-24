<?php

class Persona{
    private $posibles_generos = ['m','f',];
    private $posibles_nombres_m= ['Antonio','José','Francisco','Juan','Manuel','Pedro','Jesus','David'];
    private $posibles_nombres_f = ['Maria','Josefa','Isabel','Francisca','Lucerito','Dolores'];
    private $posibles_apellidos = ['Garcia','Martinez','Gómez','Moreno','Orozco','Avilés','Díaz','Serrano','Ortega','Muñoz','Romero','Castillo'];

    public $persona;
    public $nombres;
    public $apellidos;
    public $genero;


    public function __construct($nombre = null){
        if($nombre !== null){
            echo sprintf('Pasando el nombre %s dentro del constructor de nuestra clase',$nombre);
        }
        
    }


    //  Metodo para crear un persona random

    public function crear_persona(){
        $this ->genero = $this -> posibles_generos[rand(0,1)];
        $this->nombres =  $this->get_nombre();
        $this->apellidos = $this->get_apellido().' '.$this->get_apellido();
        $this->persona = $this->nombres.' '.$this->apellidos;
        return $this->persona;      
    }

    //Metodo para seleccionar un nombre del array
    private function get_nombre(){
        if($this->genero==='m'){
            return $this->posibles_nombres_m[rand(0,count($this->posibles_nombres_m)-1)];  
        }

        return $this->posibles_nombres_f[rand(0,count($this->posibles_nombres_f)-1)];  
    }

    //Metodo para obtenerr un apellido del array
    private function get_apellido(){
        return $this->posibles_apellidos[rand(0, count($this->posibles_apellidos)-1)];
    }

    //Metodo estatico para crear una funcion 

    public static function crear(){
        $persona = new self();
        return $persona->crear_persona();
    }
}