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
    <title>GreenLife</title>
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

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 80px; background-color: #DFDDDD;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex justify-content-center">
                <img src="images/chiapas.jpg" class="d-block w-40" height="300px" alt="...">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <h2>Titulo</h2>
                <p class="blockquote pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatum odit eligendi sint beatae dignissimos perferendis tempore voluptatem, molestiae itaque voluptas illo ratione, exercitationem dolorum atque pariatur aliquid maiores a?</p>
                <a href="#" class="btn text-white" style="background-color: #657A38; width: 250px;">Ver más</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex justify-content-center">
                <img src="images/EA.jpg" class="d-block w-40" height="300px" alt="...">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <h2>Titulo</h2>
                <p class="blockquote pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatum odit eligendi sint beatae dignissimos perferendis tempore voluptatem, molestiae itaque voluptas illo ratione, exercitationem dolorum atque pariatur aliquid maiores a?</p>
                <a href="#" class="btn text-white" style="background-color: #657A38; width: 250px;">Ver más</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex justify-content-center">
                <img src="images/menu.webp" class="d-block w-40" height="300px" alt="...">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <h2>Titulo</h2>
                <p class="blockquote pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatum odit eligendi sint beatae dignissimos perferendis tempore voluptatem, molestiae itaque voluptas illo ratione, exercitationem dolorum atque pariatur aliquid maiores a?</p>
                <a href="#" class="btn text-white" style="background-color: #657A38; width: 250px;">Ver más</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        
                <div class="container d-flex justify-content-center text-center pt-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card" style="width: 18rem;">
                                <a href="crearQueja.php" style="text-decoration: none;">
                                    <img src="images/1 (1).png"  alt="..img.." height="100" width="100" class="rounded mx-auto d-block pt-3">
                                <div class="card-body">
                                    <p class="card-text text-black">Crear queja</p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card" style="width: 18rem;">
                                <a href="misQuejas.php" style="text-decoration: none;">
                                    <img src="images/1 (1).png"  alt="..img.." height="100" width="100" class="rounded mx-auto d-block pt-3">
                                <div class="card-body">
                                    <p class="card-text text-black">Mis quejas</p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card" style="width: 18rem;">
                                <a href="verQuejas.php" style="text-decoration: none;">
                                    <img src="images/1 (1).png"  alt="..img.." height="100" width="100" class="rounded mx-auto d-block pt-3">
                                <div class="card-body">
                                    <p class="card-text text-black">Quejas</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="container-fluid mt-5">
                  <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                      <div class="card" style="width: 18rem;">
                        <img src="images/articulo.jpeg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="verArticulo.php" class="btn text-white" style="background-color: #657A38;">Ver más</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                      <div class="card" style="width: 18rem;">
                        <img src="images/menu.webp" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn text-white" style="background-color: #657A38;">Ver más</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                      <div class="card" style="width: 18rem;">
                        <img src="images/menu.webp" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn text-white" style="background-color: #657A38;">Ver más</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                      <div class="card" style="width: 18rem;">
                        <img src="images/menu.webp" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn text-white" style="background-color: #657A38;">Ver más</a>
                        </div>
                      </div>
                    </div>
                  </div>
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

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>