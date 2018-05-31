<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Citas | Harmony Nails</title>
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
						<li class="nav-item activo">
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
  <section>
    <article>
    <form action="./php/agenda_cita.php" method="POST">
      <div class="form-group">
        <div class="w1-container container-fluid form-group">
          <h2>Agende su cita</h2>
          
          <!-- Contenedor que hace llamadas a las pestañas de navegación -->
          <br>
          <ul class="nav nav-pills nav-justified" id="TabInicio" role="tablist" name="Tab_Citas">
            <li class="nav-item" value="1">
              <a class="nav-link active colorpill w3-mobile" id="Tab-Uno" data-toggle="tab" href="#uno" role="tab" aria-controls="uno" aria-selected="true">Aplicación</a>
            </li>
            <li class="nav-item w3-mobile" value="2">
              <a class="nav-link" id="Tab-Dos" data-toggle="tab" href="#dos" role="tab" aria-controls="dos" aria-selected="false">Cursos</a>
            </li>
          </ul>

          <!-- Contenido de las pestañas de navegación -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="uno" role="tabpanel" aria-labelledby="Tab-Uno">
              <br>
              <p>¡Agende una cita con nosotros para aplicación de uñas!</p>
              <label for="usr">Nombre:</label>
              <input type="text" class="form-control" name="Nombre_aplica" placeholder="Introduzca su nombre" minlength="5" maxlength="30">
              <br>
              <label for="usr">Número:</label>
              <input type="number" class="form-control" name="Numero_aplica" placeholder="Introduzca su número de celular (WhatsApp)" minlength="10" maxlength="15">
              <br>			
			  <label for="usr">Seleccione una fecha y hora para su cita(dd/mm/aa hh:mm):  </label>
			  <input type="datetime-local" name="fechaCitaAplica">
			  <br>
            </div>
            <div class="tab-pane fade" id="dos" role="tabpanel" aria-labelledby="Tab-Dos">
              <br>
              <p>¡Agende una cita para inscribirse a nuestros cursos de aplicación de uñas!</p>
              <label for="usr">Nombre:</label>
              <input type="text" class="form-control" name="Nombre_curso" placeholder="Introduzca su nombre" minlength="5" maxlength="30">
              <br>
              <label for="usr">Número:</label>
              <input type="number" class="form-control" name="Numero_curso" placeholder="Introduzca su número de celular (WhatsApp)" minlength="10" maxlength="15">
              <br>			
			  <label for="usr">Seleccione una fecha y hora para su cita(dd/mm/aa hh:mm):  </label>
			  <input type="datetime-local" name="fechaCitaCurso">
			  <br>
            </div>
          </div>
          <br>
          
          <!-- Boton que activa la alerta de confirmacion para guardar -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarCita">Guardar cambios</button>
          
          <!-- Modal para guardar -->
          <div class="modal fade" id="guardarCita" tabindex="-1" role="dialog" aria-labelledby="guardarCitaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="guardarCitaLabel">Advertencia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Está a punto de agendar una cita, ¿Desea continuar?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <input type="submit" class="btn btn-primary" name="Guardar_cita" value="Guardar cambios">
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>
      </div>
    </form>
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
</body>
</html>
