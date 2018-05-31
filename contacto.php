<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Contacto | Harmony Nails</title>
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
						<li class="nav-item">
							<a class="nav-link" href="servicios.php">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="galeria.php">Galería</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="citas.php">Citas</a>
						</li>
						<li class="nav-item activo">
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
  <section class="w2-container container-fluid" id="contrainer_bg" >
    <article>
      <h2 class="centrar_texto">¡Ponte en contacto!</h2>
      <br>
	  <picture>
      	<source media="(min-width: 1000px)" class="centrar" srcset="/images/logo.svg">
        <img src="/images/logo-png.png" class="centrar" alt="Harmony Nails">
      </picture>
      <br>
      <p class="p2">
        <a href="<?php include ("./php/consultas.php"); $conn = new conexion(); $conn->recuperarDatos("ruta_contacto", "contacto_contenido", "id_contacto=1"); ?>" target="_blank"><img src="/images/faceb_logo.svg" class="logos_redes" alt="fb"></a>
        <a href="<?php $conn = new conexion(); $conn->recuperarDatos("ruta_contacto", "contacto_contenido", "id_contacto=2"); ?>" target="_blank"><img src="/images/insta_logo.svg" class="logos_redes" alt="instagram"></a>
        <a href="#" data-toggle="popover" data-trigger="focus" title="WhatsApp de Harmony Nails" data-placement="top" data-content="<?php $conn = new conexion(); $conn->recuperarDatos("ruta_contacto", "contacto_contenido", "id_contacto=3"); ?>"><img src="/images/wp_logo.svg" class="logos_redes" alt="WhatsApp"></a></p>
      <!-- Separador  -->
      <div class="dropdown-divider"></div>
      <!-- Espacio para serparar elementos  -->
      <br>
      <!-- Ubicación de google maps  -->
      <iframe class="container-fluid"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d871.3577107571032!2d-110.99425027082702!3d29.122479998889204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce86b5c0e24559%3A0xb1d983d91c5ec08d!2sNu%C3%B1o+de+Guzm%C3%A1n+672%2C+Progresista%2C+83120+Hermosillo%2C+Son.!5e0!3m2!1ses-419!2smx!4v1520818218553" width="1200" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
      <!-- Ubicación de google maps  -->
      <br>
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
	<script>
		$(document).ready(function(){
    	$('[data-toggle="popover"]').popover();   
		});
	</script>
</body>
</html>