<?php
session_start();
 if(isset($_SESSION['nombreUsuario'])){ 
  
    
    $usuarioSesion=$_SESSION['nombreUsuario'];
   $rolSesion=$_SESSION['rolUsuario'];
   $idUsuario=$_SESSION['idUsuario'];
   
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
    <title>Mis quejas</title>
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
          <li class="nav-item">
            <a class="nav-link active" style="color: #5A372C;" aria-current="page" href="menuPrincipal.php">Inicio</a>
          </li>
          <li class="nav-item flex-fill">
            <a class="nav-link active" style="color: #5A372C;" aria-current="page" href="verQuejas.php">Ver quejas</a>
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
  <?php
                     require_once 'modelo/publicacion.php';
                     $publicacion=new Publicacion();
                     $resultado=$publicacion->ObtenerPub($idUsuario);
                     if(count($resultado)>0){
                       foreach ($resultado as $registro ) {
                         ?>
      <main style="padding-top: 130px;">
    
        <div class="container">
          
            <div class="row">
              
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex justify-content-center">
                
                         
                    <img class="pt-3" src="images/EA.jpg" width="300px" height="200px" alt="">
                    
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    
                    <h2 class="pt-3"><?php echo $registro['titulo']; ?></h2>
                    <p class="card-text"><small class="text-muted d-flex justify-content-end">05/11/2022</small></p>
                    <p class="blockquote pt-3"><?php echo $registro['descripcion']; ?></p>
                    <button type="button" class="btn text-white" style="background-color: #657A38;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Editar</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Deseas editar esta publicación?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form>
                      <label for="title"></label>
                      <input class="input-4" type="text" field="" name="title" id="title" placeholder="Titulo">
                      <br>
                      <br>
            
                      <label for="start">Fecha:</label>
                        <input type="date" id="start" name="trip-start" placeholder="Fecha"
                        min="1950-01-01" max="2023-12-31">
              
                      <br>
                      <br>
                      <div class="mb-3">
                        <label for="file" class="form-label"></label>
                        <input class="form-control" type="file" id="file">
                      </div>
            
                    <div class="mb-3">
                    <label for="message-text" class="col-form-label">Descripción:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn text-white" style="background-color: #657A38;">Guardar</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-block text-white" style="width: 100px; background-color: #657A38;">Eliminar</button>
                   
                </div>
            </div>
                    
        </div>
        
        
          <?php
                       }
                      }
                    ?>
      </main>
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
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>