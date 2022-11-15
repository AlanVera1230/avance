<?php

class Publicacion {

    public function ObtenerPub($idUsuario){
        include 'conexion.php';
        $conectar=new Conexion();
        $consulta="SELECT * FROM publicacion WHERE usuarioId=:idUsuario";
        $query=$conectar->prepare($consulta); //preparas la consulta
        $query->bindParam(":idUsuario",$idUsuario,PDO::PARAM_STR);
        $query->execute(); //ejecutas
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetchAll();
    }
    
    public function InsertarPub($titulo,$descripcion){
        try {
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("INSERT INTO publicacion(titulo,descripcion)
                VALUES(:titulo, :descripcion)");
            $consulta ->bindParam(":titulo",$titulo,PDO::PARAM_STR);   
            $consulta ->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);  
            
            $consulta->execute();
            return true; 
        } catch (Exception $e) {
            return false; 
        }
        
    }

}

?>