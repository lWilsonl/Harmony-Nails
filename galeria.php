<?php
	function recuperarImagenes(){
		$directorio = opendir("./images/gallery");
		$n = 0;
		$img = array();
		while ($archivo = readdir($directorio)) {
			$img[$n] = "<img src='/images/gallery/$archivo' ";
			if ($n >=1) {
				echo ($img[$n])."<br>";
			}	
			$n++;
		}	
	}	
?>
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
  <title>Galería | Harmony Nails</title>
</head>
<body>
	<!-- Boton para volver al principio del sitio -->
  	<a href="#up" duraction="1000" height-hide="100" easing="easeInOutQuad" class="simplescrollup__button simplescrollup__button--hide" style="color: #ffffff">Ir arriba</a>
	<!-- Barra de contenido tipo Nav dentro de header -->
	<header class="container-fluid">
		<div class="navbar-header-fluid">
			<nav class="navbar navbar-expand-md navbar-light  rounded navbar-static-top">
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
						<li class="nav-item activo">
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
    	<h2 style="text-align: center;">Galería</h2>
	    <div class="fotorama centrar" data-allowfullscreen="true" data-width="100%" data-ratio="1366/768" data-loop="true" data-keyboard="true" data-nav="thumbs" data-arrows="true"><?php recuperarImagenes();?></div>
    </article>
    <br>
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
