<?php 

class usuarioModel extends Model{

    public $id;
    public $nombre;
    public $tipo_usuario;
    public $created_at;
    public $username;
    public $email;
    public $pass;

    /**
     * 
     * Método para agregar un nuevo usuario
     *  @return integer
     * 
     */
    public function add(){  
        $sql = 'INSERT INTO usuarios(nombre,apellido,tipo_usuario,created_at) VALUES(:nombre,:apellido,:tipo_usuario,:created_at)';
        $user = 
        [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'tipo_usuario' => $this->tipo_usuario,
            'created_at' => $this->created_at,
        ];
      

        try{
            return($this->id= parent::query($sql,$user)) ? $this->id : false;
        }catch(Exception $e){
            throw $e;
        }
        

    }

    public function update(){  
        $sql = 'UPDATE usuarios SET nombre=:nombre, apellido=:apellido, tipo_usuario=:tipo_usuario WHERE id=:id';
        $user = 
        [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'tipo_usuario' => $this->tipo_usuario,
        ];
      

        try{
            return(parent::query($sql,$user)) ? true : false;
        }catch(Exception $e){
            throw $e;
        }
        

    }
    
}