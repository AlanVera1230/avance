<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="../css/formNuevoC.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
        
        <form class="formNuevo" action="insertarUsuarios.php" method="post">
            <h1 class="text-center" style="color: #657A38;">Registrate</h1>
            <div class="form-options">
           
            <label for="nombre"></label>
            <input class="input-1" type="text" field="" name="nombre" id="nombre" placeholder="Nombre">
    
            <label class="input-2-label" for="apellidoPaterno"></label>
            <input class="input-2" type="text" field="" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido paterno">
    
            <label class="input-3-label" for="apellidoMaterno"></label>
            <input class="input-3" type="text" field="" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido materno">
    
            <br>
            <br>
            
    
            <br>
            <br>
            <label for="email"></label>
            <input class="input-4" type="email" field="" name="correo" id="email" placeholder="Correo electrónico">
    
            <br>
            <br>
            <label for="password"></label>
            <input class="input-5" type="password" field="" name="password" id="password" placeholder="Contraseña">
    
            <br>
            <br>
           
    
            <br>
            <br>
            <button type="submit" class="btn btn-block text-white" name="registrar" style="width: 100px; background-color: #657A38;">Registrate</button> 
        </div>
        </form>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>