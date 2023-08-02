<?php 

class Db{
    private $link;
    private $engine;
    private $host;
    private $name;
    private $user;
    private $pass;
    private $charset;

    /**
     * 
     * Constructor de la clase 
     */

    public function __construct(){
        $this->engine = IS_LOCAL ? LDB_ENGINE : DB_ENGINE; 
        $this->name = IS_LOCAL ? LDB_NAME : DB_NAME; 
        $this->user = IS_LOCAL ? LDB_USER : DB_USER; 
        $this->pass = IS_LOCAL ? LDB_PASS : DB_PASS; 
        $this->charset = IS_LOCAL ? LDB_CHARSET : DB_CHARSET; 
        return $this;
    }


    /**
     * Método para establecer conexión a la base de datos
     * 
     * @return void
     */

     private function connect(){
        try{
            $this->link = new PDO($this->engine.':host='.$this->host.';dbname='.$this->name.';charset='.$this->charset, $this->user,$this->pass);
            return $this->link;
        }catch(PDOException $e){
            die(sprint_f('No hay conexión a la base de datos, hubo error: %s',$e->getMessage()));
        }
     }


     /**
      * Método para hacer query a la base de datos
      * 
      * @param  string $sql
      * @param array $params
      * @return void
      * 
      */
      public static function query($sql, $params = []){
        $db = new self();
        $link = $db->connect(); //conexión a la base de datos
        $link ->beginTransaction(); //Metodo del PDO, hace transacciones para guardar cambios si son correctos, sino hace un rollback 
        $query = $link->prepare($sql); 

        //Manejando los errores en el query o petición
        if(!$query->execute($params)){
            $link->rollBack();
            $error = $query->errorInfo();
            //index 0 es el tipo de error
            //index 1 es el código de error
            //index 2 es el mensaje de error
            throw new Exception($error[2]);
        }

        if(strpos($sql, 'SELECT') !== false){
            return $query->rowCount() > 0 ? $query->fetchAll() : false;
        }elseif(strpos($sql, 'INSERT') !== false){
            $id = $link->lastInsertId();
            $link->commit();
            return $id;
        }elseif(strpos($sql, 'UPDATE') !== false){
            $link->commit();
            return true;
        }elseif(strpos($sql, 'DELETE') !== false){
            if($query->rowCount()>0){
                $link->commit();
                return true;
            }
            $link->rollBack();
            return false;
        }else{
            $link->commit();
            return true;
        }
      }
}