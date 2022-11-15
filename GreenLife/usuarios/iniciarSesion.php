<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/formIngresar.css">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">

      <form class="formIngresar" action="validarUsuarios.php" method="post">
        <h1 class="text-center" style="color: #657A38;">Iniciar sesión</h1>
        <div class="form-options">
        
        <label for="email"></label>
        <input class="input-4" type="email" field="" name="correo" id="email" placeholder="Correo electrónico">

        <br>
        <br>
        <label for="password"></label>
        <input class="input-5" type="password" field="" name="password" id="password" placeholder="Contraseña">

        <br>
        <br>
        <button type="submit" class="btn btn-block text-white" style="width: 100px; background-color: #657A38;">Ingresar</button> 
    </div>
    </form>
    </div>

      <script src="../js/bootstrap.min.js"></script>      
</body>
</html>