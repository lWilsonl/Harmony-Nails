<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Servicios | Harmony Nails</title>
</head>
<body>
	<!-- Boton para volver al principio del sitio -->
  	<a href="#up" duraction="1000" height-hide="100" easing="easeInOutQuad" class="simplescrollup__button simplescrollup__button--hide" style="color: #ffffff"><img src="/images/arrow.png" style="width: 6vh; height: 6vh;"></a>
	<!-- Barra de contenido tipo Nav dentro de header -->
	<header class="container-fluid">
		<div class="navbar-header-fluid">
			<nav class="navbar navbar-expand-md navbar-light  rounded navbar-static-top">
				<a class="navbar-brand" href="index.php" style="font-family: Dancing Script;">
					<picture>
            			<source media="(min-width: 1000px)" srcset="/images/logo.svg">
            			<img src="/images/logo-png.png" alt="Harmony Nails">
          			</picture>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample09">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item activo">
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
  	<!-- Separador para separar el header del objeto carousel -->
  	<div class="dropdown-divider"></div>
	</header>
  <!-- Espacio para separar el texto -->
  <br>
  <!-- Texto de la pagina -->
  <section class="w2-container container-fluid" id="contrainer_bg">
    <article>
	    <!-- Galeria para la aplicacion -->
	    <!-- Titulo del apartado de Aplicacion -->
    	<h2 style="text-align: center;"><?php include ("./php/consultas.php"); $conn = new conexion(); $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=1"); ?></h2>
    	<!-- Galeria del apartado Aplicacion -->
	    <div class="fotorama centrar" data-allowfullscreen="true" data-width="100%" data-ratio="1366/768" data-loop="true" data-keyboard="true" data-nav="thumbs" data-arrows="true"><?php include ("./php/traer_imagenes.php"); recuperarImagenes("aplicacion");?></div>
        <!-- Contenedor de la descripción para el apartado de Aplicacion -->
        <div class="w4-container container-fluid" style="background-color: #e2e5ec;">
          <br>
          <!-- Contenido del apartado Servicios/Aplicacion-->
          <p class="p"><?php $cont=new conexion(); $cont->recuperarDatos("contenido_servicio", "contenido_servicio", "id_cont_servicio=1"); ?></p>
          <!-- Separador  -->
          <div class="dropdown-divider"></div>
        </div>
  		<!-- Galeria para los cursos  -->
	    <!-- Titulo del apartado de Aplicacion -->
    	<h2 style="text-align: center;"><?php $conn = new conexion(); $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=2"); ?></h2>
    	<!-- Galeria del apartado Cursos -->
	    <div class="fotorama centrar" data-allowfullscreen="true" data-width="100%" data-ratio="1366/768" data-loop="true" data-keyboard="true" data-nav="thumbs" data-arrows="true"><?php recuperarImagenes("curso");?></div>
        <!-- Contenedor de la descripción para el apartado de Cursos -->
        <div class="w4-container container-fluid" style="background-color: #e2e5ec;">
          <br>
          <!-- Contenido del apartado Servicios/Cursos-->
          <p class="p"><?php $cont=new conexion(); $cont->recuperarDatos("contenido_servicio", "contenido_servicio", "id_cont_servicio=2"); ?></p>
          <!-- Separador  -->
          <div class="dropdown-divider"></div>
        </div>
	    <br>
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
  	<script src="/scripts/simplescrollup.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</body>
</html>
