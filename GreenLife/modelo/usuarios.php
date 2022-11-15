<?php
    class Usuario{
        public function CreateUsuario($nombre,$apellidoPaterno,$apellidoMaterno,$correo,$password){
            try {
                include 'conexion.php';
                $conectar=new Conexion();
                $consulta=$conectar->prepare("INSERT INTO usuarios(nombre,aPaterno,aMaterno,correo,password,rol)
                        VALUES(:nombre,:apellidoPaterno,:apellidoMaterno,:correo,:password,2)");
                        $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
                        $consulta->bindParam(":apellidoPaterno",$apellidoPaterno,PDO::PARAM_STR);
                        $consulta->bindParam(":apellidoMaterno",$apellidoMaterno,PDO::PARAM_STR);
                        $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
                        $consulta->bindParam(":password",$password,PDO::PARAM_STR);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                return false;
            }
        }
        public function AutentificarUsuario($correo,$password){
            try {
                include 'conexion.php';
                $conectar= new Conexion();
                $consulta=$conectar->prepare("SELECT * FROM usuarios WHERE 
                          correo=:correo AND password=:password");
                $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
                $consulta->bindParam(":password",$password,PDO::PARAM_STR); 
                $consulta->execute();
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                return $consulta->fetchAll();         
            } catch (Exception $e) {
                return 0;
            }
        }

        

    }
?>