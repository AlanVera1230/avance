<?php
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$correo=$_POST['correo'];
$password=$_POST['password'];

require_once '../modelo/usuarios.php';
$nuevoUsuario=new Usuario();
$resultado=$nuevoUsuario->CreateUsuario($nombre,$apellidoPaterno,$apellidoMaterno,$correo,$password);
if($resultado){
    header("Location:iniciarSesion.php");
}
else{
    //echo $resultado; 
    header("Location: crearCuenta.php");
}
?>