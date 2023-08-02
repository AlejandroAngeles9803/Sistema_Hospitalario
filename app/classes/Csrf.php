<?php 

class Csrf{

    private $length = 32; // longitud del token
    private $token; // token 
    private $token_expiration; // tiempo de expiracion 
    private $expiration_time = 60 *5; // 5 minutos de expiracion


    public function __construct(){

    }


    /**
     * Método para generar un nuevo token
     * 
     * @return void
     */

    /**
     * Validar el token de la petición del sistema
     * 
     * @param string $csrf_token
     * @param boolean $validate_expiration
     * @return void
     * 
     */
    public static function validate($csrf_token, $validate_expiration = false){

    }


    /**
     * Método para obtener el token
     * 
     * @return void
     */
}