<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Panel de control | Harmony Nails</title>
</head>
<body>
	<!-- Boton para volver al principio del sitio -->
	<button onclick="topFunction()" id="myBtn" title="Ir arriba">Volver</button>
	<!-- Barra de contenido tipo Nav dentro de header -->
	<header class="container-fluid">
		<div class="navbar-header-fluid">
			<nav class="navbar navbar-expand-md navbar-light  rounded navbar-static-top" role="navigation">
				<a class="navbar-brand" href="index.php" style="font-family: Freestyle Script;, text-align: center;" target="_blank">
					<img src="/images/logo.svg" alt="Harmony Nails"/>
				</a>
			</nav>
		</div>
	</header>
  <!-- Espacio para separar el header del panel de control -->
  <br>
  <!-- Ventana de administrador dentro de container fluid, contiene los botones -->
  <section class="w2-container container-fluid" id="contrainer_bg" >
    <article>
      <h2 class="texto_contacto">Panel de control</h2>
        <p>
          <div class="btn-group btn-block">
              <button class="btn btn-primary btn-lg" style="width: 100%" type="button" data-toggle="collapse" data-target="#Inicio" aria-expanded="false" aria-controls="collapseExample">
              Inicio
              </button>
              <button class="btn btn-primary btn-lg" style="width: 100%" type="button" data-toggle="collapse" data-target="#Servicios" aria-expanded="false" aria-controls="collapseExample">
              Servicios
              </button>
              <button class="btn btn-primary btn-lg" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
              Galería
              </button>
              <button class="btn btn-primary btn-lg" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
              Citas
              </button>
              <button class="btn btn-primary btn-lg" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
              Contacto
              </button>
          </div>          
        </p>
      <!-- Formularios a los que hacen referencia los botones -->

      <!-- Formulario de inicio -->
      <div class="collapse" id="Inicio">
        <form action="update_inicio.php" method="POST">
          <div class="form-group">
            <h2>Contenido para el sitio de bienvenida</h2>
            <div class="form-group">
              <label for="SELECTOR_PARRAFO">Parrafo a editar:</label>
              <select class="custom-select" name="OPCION_I" id="SELECTOR_PARRAFO">
                <option value="1">                  
                  <?php 
                    $value=1;
                    include ("consultas.php");
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="2">
                  <?php 
                    $value=2;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="3">
                  <?php 
                    $value=3;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="4">
                  <?php 
                    $value=4;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="5">
                  <?php 
                    $value=5;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
              </select>
            </div>
            <label for="usr">Título:</label>
            <input type="text" class="form-control" name="TITULO_INICIO">
            <label for="comment">Contenido:</label>
            <textarea class="form-control" rows="5" name="CONTENIDO_INICIO"><?php $value=1; $cont = new conexion(); $cont->recuperarContenido($value); ?></textarea>
            <br>
            <!-- Boton que activa la alerta de confirmacion para guardar -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#guardarInicio">
              Guardar cambios
            </button>
            <!-- Boton que activa la alerta de confirmacion para limpiar -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#limpiarInicio">
              Deshacer cambios
            </button>
            <!-- Modal para guardar -->
            <div class="modal fade" id="guardarInicio" tabindex="-1" role="dialog" aria-labelledby="guardarInicioLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="guardarInicioLabel">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Esta a punto de alterar el contenido de este parrafo, ¿Desea continuar?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" name="GUARDAR_INICIO" value="Guardar cambios">
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal para vaciar campos -->
            <div class="modal fade" id="limpiarInicio" tabindex="-1" role="dialog" aria-labelledby="limpiarInicioLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="limpiarInicioLabel">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Está a punto de deshacer los ultimos cambios realizados y volver al texto originalmente guardado en la base de datos, ¿Desea continuar?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="reset" class="btn btn-primary" name="limpiar" value="Vaciar campos">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- Divisor de modulo - Formulario de Servicios-->
      <div class="dropdown-divider"></div>

      <!-- Formulario de servicios -->
      <div class="collapse" id="Servicios">
        <form action="update_servicio.php" method="POST">
          <div class="form-group">
            <h2>Contenido para el sitio de servicios</h2>
            <div class="form-group">
              <label for="SELECTOR_PARRAFO">Parrafo a editar:</label>
              <select class="custom-select" name="OPCION_S" id="SELECTOR_PARRAFO">
                <option value="1">                  
                  <?php 
                    $value=1;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="2">
                  <?php 
                    $value=2;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="3">
                  <?php 
                    $value=3;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="4">
                  <?php 
                    $value=4;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
                <option value="5">
                  <?php 
                    $value=5;
                    $conn = new conexion();
                    $conn->recuperarDatos($value);
                  ?>
                </option>
              </select>
            </div>
            <label for="usr">Título:</label>
            <input type="text" class="form-control" name="TITULO_SERVICIO">
            <label for="comment">Contenido:</label>
            <textarea class="form-control" rows="5" name="CONTENIDO_SERVICIO"></textarea>
            <br>
            <!-- Boton que activa la alerta de confirmacion para guardar -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#guardarServicio">
              Guardar cambios
            </button>
            <!-- Boton que activa la alerta de confirmacion para limpiar -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#limpiarServicio">
              Deshacer cambios
            </button>
            <!-- Modal para guardar -->
            <div class="modal fade" id="guardarServicio" tabindex="-1" role="dialog" aria-labelledby="guardarServicioLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="guardarServicioLabel">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Esta a punto de alterar el contenido de este parrafo, ¿Desea continuar?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" name="GUARDAR_SERVICIO" value="Guardar cambios">
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal para vaciar campos -->
            <div class="modal fade" id="limpiarServicio" tabindex="-1" role="dialog" aria-labelledby="limpiarServicioLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="limpiarServicioLabel">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Está a punto de deshacer los ultimos cambios realizados y volver al texto originalmente guardado en la base de datos, ¿Desea continuar?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="reset" class="btn btn-primary" name="limpiar" value="Vaciar campos">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
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
	<script src="/scripts/Boton_Volver.js"></script>
</body>
</html>
