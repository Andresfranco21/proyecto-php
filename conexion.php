<?php

class conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contrasena="";
    private $db="album";
    private $conexion;

    public function __construct(){
        $conectionString ="mysql:host=".$this->servidor.";dbname=".$this->db.";charset=utf8"; 
        try{
            $this->conexion=  new PDO($conectionString,$this->usuario,$this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        }catch(PDOException $e){
            return "falla de conexion".$e;
        }
    }
    // Metodo para insertar Datos
    public function ejecutar($sql){ 
        $this->conexion->exec($sql);
        // lastInsertId Insercion de comando sql
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>