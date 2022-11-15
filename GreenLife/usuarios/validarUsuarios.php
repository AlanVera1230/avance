<?php
$correo=$_POST['correo'];
$contraseña=$_POST['password'];
//echo $correo;
require_once '../modelo/usuarios.php';
$usuario=new Usuario();
$resultado=$usuario->AutentificarUsuario($correo,$contraseña);
if(count($resultado)>0){
    //echo 'existe';
    foreach ($resultado as $registroEcontrado) {
        session_start();
        $_SESSION['idUsuario']=$registroEcontrado['id'];
        $_SESSION['nombreUsuario']=$registroEcontrado['correo'];
        $_SESSION['rolUsuario']=$registroEcontrado['rol'];
        header("Location:../menuPrincipal.php");
    }
}
else{
    header("Location:iniciarSesion.php");
}
?>