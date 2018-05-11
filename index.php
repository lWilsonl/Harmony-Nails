<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Inicio | Harmony Nails</title>
</head>
<body>
	<!-- Boton para volver al principio del sitio -->
	<button onclick="topFunction()" id="myBtn" title="Ir arriba">Volver</button>
	<!-- Barra de contenido tipo Nav dentro de header -->
	<header class="container-fluid">
		<div class="navbar-header-fluid">
			<nav class="navbar navbar-expand-md navbar-light rounded navbar-static-top" role="navigation">
				<a class="navbar-brand" href="index.php" style="font-family: Freestyle Script;">
					<img src="/images/logo.svg" alt="Harmony Nails"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample09">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="servicios.php">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="galeria.php">Galería</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="citas.php">Citas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacto.php">Contacto</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
  <!-- Espacio para separar el header del objeto carousel -->
  <br>
  <!-- Objeto carousel dentro de un container-fluid -->
  <div class="w3-container container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-1000 sombra" src="/images/carousel_1.svg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bienvenida a Harmony Nails</h5>
            <p>Tu mejor elección</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-1000 sombra" src="/images/carousel_2.svg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Contáctanos</h5>
            <p>Tenemos los mejores precios y disponibilidad</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-1000 sombra" src="/images/carousel_3.svg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tu estilo, tu elección</h5>
            <p>Tenemos una amplia gama de opciones para ti</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- Separador  -->
  <div class="dropdown-divider"></div>
  <!-- Espacio para separar el carousel del texto -->
  <br>
  <!-- Texto de la pagina -->
  <section>
    <article>
      <div class="container-fluid">
        <button type="button" class="btn btn-primary centrar" data-toggle="collapse" data-target="#VerMas">Ver más</button>
        <div id="VerMas" class="collapse">
          <h2><?php $value=1; include ("consultas.php"); $conn = new conexion(); $conn->recuperarDatos($value); ?></h2>
          <p class="p"><?php $value=1; $conn = new conexion(); $conn->recuperarContenido($value); ?></p>

          <h2><?php $value=2; $conn = new conexion(); $conn->recuperarDatos($value); ?></h2>
            <p class="p"><?php $value=2; $conn = new conexion(); $conn->recuperarContenido($value); ?></p>

          <h2><?php $value=3; $conn = new conexion(); $conn->recuperarDatos($value); ?></h2>
            <p class="p"><?php $value=3; $conn = new conexion(); $conn->recuperarContenido($value); ?></p>

          <h2><?php $value=4; $conn = new conexion(); $conn->recuperarDatos($value); ?></h2>
            <p class="p"><?php $value=4; $conn = new conexion(); $conn->recuperarContenido($value); ?></p>

          <h2><?php $value=5; $conn = new conexion(); $conn->recuperarDatos($value); ?></h2>
            <p class="p"><?php $value=5; $conn = new conexion(); $conn->recuperarContenido($value); ?>Holowo</p>
        </div>
      </div>
    </article>
  </section>
  <!-- Sección de pie de pagina -->
  <footer>
    <p class="mb-3 text-muted">&copy; Harmony Nails - 2018</p>
  </footer>
  <!-- Librerias y scripts Javascript -->
  <script src="/scripts/jquery-3.2.1.slim.min.js"></script>
  <script>window.jQuery || document.write('<script src="/scripts/jquery-slim.min.js"><\/script>')</script>
  <script src="/scripts/popper.min.js"></script>
  <script src="/scripts/bootstrap.min.js"></script>
  <script src="/scripts/Boton_Volver.js"></script>
</body>
</html>
