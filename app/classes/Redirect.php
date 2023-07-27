<?php

class Redirect {

    private $location;


    /**
     * 
     * Método para redirigir al usario 
     * 
     * @param string $location
     * @return void
     * 
     */
    public static function to($location){
        $self = new self();
        $self -> location = $location;

        //Verificar si las cabeceras ya fueron enviadas
        if(headers_sent()){
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.URL.$self->location.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0";url="'.URL.$self->location.'" />';
            echo '</noscript>';
            die();
        }

        //Cuando se pasa una url externa
        if(strpos($self->location,'http')!==false){
            header('Location: '.$self->location);
            die();
        }

        //Redirigir al usuario a otra seccion 
        header('Location: '.URL.$self->location);
        die();
    }
}