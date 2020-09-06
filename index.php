<?php
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2) {
  header('location: index.html');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huellas</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/social.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="header center-block">
      <p class="logo col-md-7">
        <img src="img/logo.jpg.JPG" class="img-fluid" alt="">
      </p>
      <p class="redes col-md-5">
        <nav class="redes-sociales">
          <a href="https://api.whatsapp.com/send?phone=+573508259536"><i class="icon-whatsapp"></i></a>
          <a href="contacto.html"><i class="icon-envelope"></i></a><br>
          <a href="login/index.php" class="boton1"><i class="icon-cart"></i>Carrito de compras</a>
        </nav>
      </p>
    </div>
  </div>

  <div class="container">
    Hola usuario estandar <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="login/controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
    </a>
  </div>
  <nav class="navbar navbar-expand-lg rango">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Lavado de Manos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="boton2 nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Protocolos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="gatos.html">Gatos</a>
            <a class="dropdown-item" href="perros.html">Perros</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Nosotros.html">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.html">Contacto</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="boton1 my-2 my-sm-0" type="submit">buscar</button>
      </form>
    </div>
  </nav>


  <div class="container">
    <div class="carrusel">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Pagina inicial.JPG" class="d-block w-100" alt="Carrusel de imagenes">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color">First slide label</h5>
              <p class="color">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Perro y gato amor.jpg" class="d-block w-100" alt="Carrusel de imagenes">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color">Second slide label</h5>
              <p class="color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Perros y gatos mirando a un lado.jpg" class="d-block w-100" alt="Carrusel de imagenes">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color">Third slide label</h5>
              <p class="color">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card-group">
      <div class="card carta">
        <a href="productos.html">
          <img src="img/perro2.JPG" class="card-img-top img-fluid" alt="...">
          <div class="card-body colores">
            <h5 class="card-title">Card title</h5>
            <p class="colores"><small>Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>
      <div class="card carta">
        <a href="productos.html">
          <img src="img/WhatsApp Image 2020-01-29 at 08.20.08.jpeg" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="colores"><small>Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>
      <div class="card carta">
        <a href="productos.html">
          <img src="img/WhatsApp Image 2020-01-29 at 08.18.50.jpeg" class="card-img-top img-fluid" alt="...">
          <div class="body card-body colores">
            <h5 class="card-title">Card title</h5>
            <p class="colores"><small>Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer>
    <nav class="navbar2 navbar-expand-lg ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Lavado de Manos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="boton2 nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Protocolos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="gatos.html">Gatos</a>
              <a class="dropdown-item" href="perros.html">Perros</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="pocision">
            <h6>Inscribite a nuestras promociones y ferias</h6>
          </div>
          <div class="cajas"></div>
          <input class="form-control mr-sm-2" type="email" placeholder="Introduce su email" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inscribirse</button>
      </div>

      </form>
      </div>
    </nav>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.js"></script>
</body>

</html>