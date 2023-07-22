<?php

class Sgh{
    //Propiedades del framework
 
    private $framework = 'SGH Framework'; // Nombre del framework
    private $version = '1.0.0';
    private $uri = [];


    //Funcion principal

    function __construct(){
        $this->init();
    }

    /**
     * Método para ejecutar cada "metodo" de manera subsecuente
     * @return void
     */
    
    private function init(){
        $this->init_session();
        $this->load_configuration();
        $this->load_function();
        $this->init_autoload();
    }

    /**
     * Método para iniciar la sesion del sistema
     * 
     * @return void
     */

     private function init_session(){
        if(!session_start()){
            session_start();
        }
        return;
     }


     /** 
      * Metodo para cargar la configuracion del sistema
      * 
      * @return void
     */
    private function load_configuration(){
        $file = 'sgh_config.php';
        if(!is_file('app/config/'.$file)){
            die(sprintf('El archivo %s no se encuentra es requerido para que %s funcione',$file, $this->framework));
        }

        require_once 'app/config/'.$file;

        return;
    } 

    /**
     * Método para cargar todas las funciones del sistema y usuario
     * 
     * @return void
     */
    private function load_function(){
        $file = 'sgh_core_function.php';
        if(!is_file(FUNCTIONS.$file)){
            die(sprintf('El archivo %s no se encuentra es requerido para que %s funcione',$file, $this->framework));
        }

        //Cargando el archivo de funciones core
        require_once FUNCTIONS.$file;

        $file = 'sgh_custom_functions.php';
        if(!is_file(FUNCTIONS.$file)){
            die(sprintf('El archivo %s no se encuentra es requerido para que funcione',$file, $this->framework));
        }

        //Cargando el archivo de funciones custom
        require_once FUNCTIONS.$file;

        return;
    }


    /**
     * Método para cargar todos los archivos de manera automatica
     * 
     * @return void
     */
    private function init_autoload(){
        require_once CLASSES.'Db.php';
        require_once CLASSES.'Model.php';
        require_once CLASSES.'Controller.php';

        return;
    }
}