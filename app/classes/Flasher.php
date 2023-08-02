<?php

class Flasher{

    private $valid_types= ['primary','secondary','success','danger','danger','warning','info','light','dark'];
    private $default = 'primary';
    private $type;
    private $msg;


    /**
     * Método para guardar notificaciones flash
     * 
     * @param string array $msg
     * @param string $type
     * @return void
     * 
     */
    public static function new($msg, $type = null){
        $self  = new self();
        //  Se setea el tipo de notificacion por defecto
        if($type === null){
            $self->type = $self-> default;

        }
            
        $self->type= in_array($type, $self->valid_types) ? $type : $self->default ;

        //Guardar la notificacion en un array de sesion
        if(is_array($msg)){
            foreach($msg as $m){
                $_SESSION[$self->type][] = $m;
            }
            return true;
        }

        $_SESSION[$self->type][] = $msg;
        return true;
    }


    /**
     * Método para renderizar las notificaciones
     * 
     * @return void
     * 
     */
    public static function flash(){
        $self = new self();
        $output = '';

        foreach($self->valid_types as $type){
            if(isset($_SESSION[$type]) && !empty($_SESSION[$type])){
                foreach($_SESSION[$type] as $m){
                    $output .= '<div class="alert alert-'.$type.' alert-dismissible show fade"  role="alert">';
                    $output .= $m;
                    $output .= ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    $output .= '</div>';
                }
                unset($_SESSION[$type]);
               
            }
        }
        return $output;
    }
}