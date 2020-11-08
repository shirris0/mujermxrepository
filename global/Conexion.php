<?php

require "config.php";

class ConexionClass{

    protected $conexion_db;

    public function Conexion(){

        try{
            $this->conexion_db = new PDO('mysql:host=72.249.55.26; dbname=trespunt_mujermx;charset=utf8mb4',USUARIO,PASSWORD,);

            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conexion_db->exec("SET CHARACTER SET utf8");
            
            return $this->conexion_db;

        }catch(Exception $e){
            echo "<script> alert('Error en la conexión a la Base de Datos') </script>";
        }

        
    }
}

?>