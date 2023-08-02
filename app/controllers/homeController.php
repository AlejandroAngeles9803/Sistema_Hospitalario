<?php

class homeController extends Controller{

    function __construct(){
    }

    function index(){
        try{
            $user = new usuarioModel();
            $user->nombre =  'Juan';
            $user->apellido = 'Gutierrez';
            $user->tipo_usuario = 'Paciente';
            $user->created_at = now();
            $user->username = 'Juan123';
            $user->email  = 'juan@gmail.com';
            $user->pass = 'juan258';
            //$id = $user->add();
            //echo $id;
        }catch(Exception $e){
            echo $e->getMessage();
        }


        die;
        $data = 
        [
            'title' => 'JAYIVE-MEDS',
            'bg' => 'light',
            'nav_bg' => 'light'
        ];

        View::render('sgh',$data);
        
    }

    function test(){

        echo 'Probando la base de datos <br><br><br>';
        echo '<pre>';

        try{
            //Select
            $sql = 'SELECT * FROM test WHERE id=:id AND name=:name';
            $res = Db::query($sql,[':id' => 1, 'name' => 'Alejandro']);
            print_r($res);

            //Insert
            //$sql = 'INSERT INTO test (name,email,created_at) VALUES(:name, :email, :created_at)';
            /*$registro= [
                'name' => 'Juan',
                'email' => 'nuevo@example.com',
                'created_at' => now()
            ];*/
            //$id = Db::query($sql,$registro);
            //print_r($id);

            //Update
            //$sql = 'UPDATE test SET name=:name WHERE id=:id';
            /*$registro_actualizado =[
                'name' => 'Ricardo',
                'id' =>5
            ];*/
            //print_r(Db::query($sql,$registro_actualizado));

            //Delete
           // $sql = 'DELETE FROM test WHERE id=:id LIMIT 1';
            //print_r(Db::query($sql,['id' => 6]));


            //Alter table
            $sql = 'ALTER TABLE test ADD COLUMN username VARCHAR(255)  NULL AFTER name';
            //print_r(Db::query($sql));
        }catch(Exception $e){
            echo 'Hubo un error' .$e->getMessage();
        }
        echo '</pre>';
        die();
          
            
        
        View::render('test');
    }
    function flash(){
        
        Flasher::new('Hola mundo, soy una notificacion','danger');

      

        View::render('flash',null);
    }
}