<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $rolSesion=$_SESSION['rolUsuario'];
  }
  else{
    if ($usuarioSesion=='' && $rolSesion=='') {
      header("Location:usuarios/crearCuenta.php");
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a9ccb9; position: fixed; z-index: 100; width: 100%;">
        <div class="container-fluid">
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
              <li class="nav-item flex-fill">
                <a class="nav-link active" style="color: #5A372C;" aria-current="page" href="menuPrincipal.php">Inicio</a>
              </li>
              <li class="nav-item dropdown" style="padding-right: 15px;">
                <a class="nav-link dropdown-toggle" style="color: #5A372C;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                      if(!$usuarioSesion=='')
                      {
                        echo '<label>'.$usuarioSesion.'</label>';
                      }
                      ?>   
                </a>
                <ul class="dropdown-menu" style="padding-right: 15px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="verPerfil.php">Ver perfil</a></li>
                  <li><a class="dropdown-item" href="editarPerfil.php">Editar perfil</a></li>
                  <li><a class="dropdown-item" href="misQuejas.php">Mis quejas</a></li>
                  <li> <hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="usuarios/logout.php">Salir</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main style="padding-top: 100px;">
        <div class="container">
            <h1 class="text-center">Titulo</h1>
            <p class="card-text text-center"><small class="text-muted pt-5">GREENLIFE | 05/11/2022</small></p>
            <div class="d-flex justify-content-center">
                <img class="pt-3" src="images/articulo.jpeg" width="900px" height="400px" alt="">
            </div>
            <p class="blockquote pt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe fugit minima nulla reprehenderit voluptate, ad alias placeat, maiores facere repellat non, ea repellendus culpa voluptates ipsam dolorum fuga quas ex.</p>
        </div>

        <footer class="d-flex justify-content-center mt-5" style="background-color: #a9ccb9;">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    
              <div class="me-5 d-none d-lg-block">
                <span>GREENLIFE&copy;</span>
              </div>
    
              <div>
                <a href="" class="me-4 link-secondary">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
    
            </section>
          </footer>
      </main>

      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>