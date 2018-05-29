<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link href="/dist/summernote-bs4.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Panel de control | Harmony Nails</title>
</head>
<body>
  
  <!-- Boton para volver al principio del sitio -->
  <a href="#up" duraction="1000" height-hide="100" easing="easeInOutQuad" class="simplescrollup__button simplescrollup__button--hide w3-mobile" style="color: #ffffff"><img src="/images/arrow.png" style="width: 6vh; height: 6vh;"></a>
	
  <!-- Barra de contenido tipo Nav dentro de header -->
	<header class="container-fluid">
		<div class="navbar-header-fluid">
			<nav class="navbar navbar-expand-md navbar-light  rounded navbar-static-top" role="navigation">
				<a class="navbar-brand" href="index.php" style="font-family: Dancing Script;, text-align: center;" target="_blank">
          <picture>
            <source media="(min-width: 1000px)" srcset="/images/logo.svg">
            <img src="/images/logo-png.png" alt="Harmony Nails">
          </picture>
				</a>
			</nav>
		</div>
	</header>
  
  <!-- Espacio para separar el header del panel de control -->
  <br>
  
  <!-- Ventana de administrador dentro de container fluid, contiene los botones -->
  <section class="w2-container container-fluid" id="contrainer_bg" >
    <article>
      <h2 class="centrar_texto">Panel de control</h2>
        <p>
          <div class="btn-group btn-block w3-mobile">
              <button class="btn btn-primary btn-lg w3-mobile" style="width: 100%" type="button" data-toggle="collapse" data-target="#Inicio" aria-expanded="false" aria-controls="collapseExample">
              Inicio
              </button>
              <button class="btn btn-primary btn-lg w3-mobile" style="width: 100%" type="button" data-toggle="collapse" data-target="#Servicios" aria-expanded="false" aria-controls="collapseExample">
              Servicios
              </button>
              <button class="btn btn-primary btn-lg w3-mobile" style="width: 100%" type="button" data-toggle="collapse" data-target="#Galeria" aria-expanded="false" aria-controls="collapseExample">
              Galería
              </button>
              <button class="btn btn-primary btn-lg w3-mobile" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
              Citas
              </button>
              <button class="btn btn-primary btn-lg w3-mobile" style="width: 100%" type="button" data-toggle="collapse" data-target="#Contacto" aria-expanded="false" aria-controls="collapseExample">
              Contacto
              </button>
          </div>          
        </p>
      
      <!-- Formularios a los que hacen referencia los botones -->
      
      <!-- Formulario de inicio -->
      <div class="collapse" id="Inicio">
        <form action="./php/update_inicio.php" method="POST">
          <div class="form-group">
            <div class="w1-container container-fluid form-group">
              <h2>Contenido para el sitio de bienvenida</h2>
              
              <!-- Contenedor que hace llamadas a las pestañas de navegación -->
              <br>
              <ul class="nav nav-pills nav-justified" id="TabInicio" role="tablist" name="Tab_Inicio">
                <li class="nav-item" value="1">
                  <a class="nav-link active colorpill w3-mobile" id="Tab-Uno" data-toggle="tab" href="#uno" role="tab" aria-controls="uno" aria-selected="true"><?php include ("./php/consultas.php"); $conn = new conexion(); $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=1"); ?></a>
                </li>
                <li class="nav-item w3-mobile" value="2">
                  <a class="nav-link" id="Tab-Dos" data-toggle="tab" href="#dos" role="tab" aria-controls="dos" aria-selected="false"><?php $conn=new conexion(); $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=2"); ?></a>
                </li>
                <li class="nav-item w3-mobile" value="3">
                  <a class="nav-link" id="Tab-Tres" data-toggle="tab" href="#tres" role="tab" aria-controls="tres" aria-selected="false"><?php $conn=new conexion(); $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=3"); ?></a>
                </li>
                <li class="nav-item w3-mobile" value="4">
                  <a class="nav-link" id="Tab-Cuatro" data-toggle="tab" href="#cuatro" role="tab" aria-controls="cuatro" aria-selected="false"><?php $conn=new conexion(); $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=4"); ?></a>
                </li>
                <li class="nav-item w3-mobile" value="5">
                  <a class="nav-link" id="Tab-Cinco" data-toggle="tab" href="#cinco" role="tab" aria-controls="cinco" aria-selected="false"><?php $conn = new conexion(); $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=5"); ?></a>
                </li>
              </ul>

              <!-- Contenido de las pestañas de navegación -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="uno" role="tabpanel" aria-labelledby="Tab-Uno">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_uno" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=1");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_uno"><?php $cont=new conexion(); $cont->recuperarDatos("contenido_inicio", "contenido_inicio", "id_cont_inicio=1");?></textarea><span id="total-caracteres"></span>
                </div>
                <div class="tab-pane fade" id="dos" role="tabpanel" aria-labelledby="Tab-Dos">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_dos" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=2");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_dos" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_inicio", "contenido_inicio", "id_cont_inicio=2");?></textarea><span id="total-caracteres"></span>
                </div>
                <div class="tab-pane fade" id="tres" role="tabpanel" aria-labelledby="Tab-Tres">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_tres" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=3");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_tres" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_inicio", "contenido_inicio", "id_cont_inicio=3");?></textarea><span id="total-caracteres"></span>
                </div>
                <div class="tab-pane fade" id="cuatro" role="tabpanel" aria-labelledby="Tab-Cuatro">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_cuatro" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=4");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_cuatro" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_inicio", "contenido_inicio", "id_cont_inicio=4");?></textarea><span id="total-caracteres"></span>
                </div>
                <div class="tab-pane fade" id="cinco" role="tabpanel" aria-labelledby="Tab-Cinco">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_cinco" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=5");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_cinco" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_inicio", "contenido_inicio", "id_cont_inicio=5");?></textarea><span id="total-caracteres"></span>
                </div>
                <small class="form-text text-muted">Los campos marcados con * son obligatorios.</small>
                <small class="form-text text-muted">Los campos marcados con * son obligatorios.</small>
              </div>
              <br>
              
              <!-- Boton que activa la alerta de confirmacion para guardar -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarInicio">Guardar cambios</button>
              
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
                      <input type="submit" class="btn btn-primary" name="Guardar_uno" value="Guardar cambios">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
          </div>
        </form>
      <!-- Divisor de modulo - Formulario de Inicio/Servicios -->
      <div class="dropdown-divider"></div>
      </div>

      <!-- Formulario de servicios -->
      <div class="collapse" id="Servicios">
        <form action="./php/update_servicio.php" method="POST">
          <div class="form-group">
            <div class="w1-container container-fluid form-group">
              <h2>Contenido para el sitio de servicios</h2>
              
              <!-- Contenedor que hace llamadas a las pestañas de navegación -->
              <br>
              <ul class="nav nav-pills nav-justified" id="TabInicio" role="tablist" name="Tab_Servicios">
                <li class="nav-item" value="1">
                  <a class="nav-link active colorpill w3-mobile" id="Tab-aplicacion" data-toggle="tab" href="#aplicacion" role="tab" aria-controls="aplicacion" aria-selected="true"><?php $conn = new conexion(); $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=1"); ?></a>
                </li>
                <li class="nav-item w3-mobile" value="2">
                  <a class="nav-link" id="Tab-cursos" data-toggle="tab" href="#cursos" role="tab" aria-controls="cursos" aria-selected="false"><?php $conn=new conexion(); $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=2"); ?></a>
                </li>
              </ul>

              <!-- Contenido de las pestañas de navegación -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="aplicacion" role="tabpanel" aria-labelledby="Tab-aplicacion">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_uno" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=1");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_uno" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_servicio", "contenido_servicio", "id_cont_servicio=1");?></textarea>
                </div>
                <div class="tab-pane fade" id="cursos" role="tabpanel" aria-labelledby="Tab-cursos">
                  <label for="usr">* Título:</label>
                  <input type="text" class="form-control" name="Titulo_dos" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_servicio", "contenido_servicio", "id_cont_servicio=2");
                    ?>" required placeholder="Introduzca el titulo del articulo" minlength="5" maxlength="30">
                  <label for="comment">* Contenido:</label>
                  <textarea class="form-control summernote" rows="5" name="Contenido_dos" required><?php $cont=new conexion(); $cont->recuperarDatos("contenido_servicio", "contenido_servicio", "id_cont_servicio=2");?></textarea>
                </div>
                <small class="form-text text-muted">Los campos marcados con * son obligatorios.</small>
              </div>
              <br>
              
              <!-- Boton que activa la alerta de confirmacion para guardar -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarServicios">Guardar cambios</button>
              
              <!-- Modal para guardar -->
              <div class="modal fade" id="guardarServicios" tabindex="-1" role="dialog" aria-labelledby="guardarServiciosLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="guardarServiciosLabel">Advertencia</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Esta a punto de alterar el contenido de este parrafo, ¿Desea continuar?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary" name="Guardar_Servicios" value="Guardar cambios">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
          </div>
        </form>
      <!-- Divisor de modulo - Formulario de Servicios/Galería -->
      <div class="dropdown-divider"></div>
      </div>

      <!-- Formulario de galería -->
      <div class="collapse" id="Galeria">
        <form action="./php/subir_imagenes.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <br>
            <div class="w1-container container-fluid form-group">
              <h2>Imágenes de la galería</h2>
              
              <!-- Contenedor que hace llamadas a las pestañas de navegación -->
              <br>
              <ul class="nav nav-pills nav-justified w3-mobile" id="TabInicio" role="tablist" name="Tab_Subir">
                
                <li class="nav-item w3-mobile" value="1">
                  <a class="nav-link active w3-mobile" id="Gal-uno" data-toggle="tab" href="#G-uno" role="tab" aria-controls="G-uno" aria-selected="true">Subir imágenes</a>
                </li>

                <li class="nav-item w3-mobile" value="2">
                  <a class="nav-link" id="Gal-dos" data-toggle="tab" href="#G-dos" role="tab" aria-controls="G-dos" aria-selected="false">Editar imágenes</a>
                </li>

              </ul>

              <!-- Contenido de las pestañas de navegación -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="G-uno" role="tabpanel" aria-labelledby="Gal-Uno">
                  <div class="mb-3 col-md-5">
                    <div>
                      <br>
                      <label>Introduzca una descripción para la(s) imágen(es):</label>
                      <input type="text" class="form-control" name="Descrip_imagen" >
                      <input type="hidden" name="carpeta" value="gallery">
                      <br>
                      <label>* Seleccione una imágen:</label>
                      <input type="file" class="form-control-file" name="exa_imagen" id="exampleFormControlFile1" accept=".png, .jpg, .jpeg, .PNG, .JPEG, .JPG" multiple="true" value="gallery" required>
                      <small class="form-text text-muted">Formato de imágenes admitidos: .png, .jpg o .jpeg</small>
                      <small class="form-text text-muted">Los campos marcados con * son obligatorios.</small>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="G-dos" role="tabpanel" aria-labelledby="Gal-dos">
                </div>
              </div>
              <br>
              
              <!-- Boton que activa la alerta de confirmacion para guardar -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarGaleria">Guardar cambios</button>
              
              <!-- Modal para guardar -->
              <div class="modal fade" id="guardarGaleria" tabindex="-1" role="dialog" aria-labelledby="guardarGaleriaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="guardarGaleriaLabel">Advertencia</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Esta a punto de subir esta imagen al servidor, ¿Desea continuar?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary" name="Guardar_uno" value="Guardar cambios">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
          </div>
        </form>
      <!-- Divisor de modulo - Formulario de Galeria/Citas -->
      <div class="dropdown-divider"></div>
      </div>

      <!-- Formulario de Contacto -->
      <div class="collapse" id="Contacto">
        <form action="./php/update_contacto.php" method="POST">
          <div class="form-group">
            <div class="w1-container container-fluid form-group">
              <h2>Contenido para el sitio de contacto</h2>
              
              <!-- Contenedor que hace llamadas a las pestañas de navegación -->
              <br>
              <ul class="nav nav-pills nav-justified" id="TabInicio" role="tablist" name="Tab_Contacto">
                <li class="nav-item" value="1">
                  <a class="nav-link active colorpill w3-mobile" id="Tab-face" data-toggle="tab" href="#face" role="tab" aria-controls="face" aria-selected="true">Facebook</a>
                </li>
                <li class="nav-item w3-mobile" value="2">
                  <a class="nav-link" id="Tab-insta" data-toggle="tab" href="#insta" role="tab" aria-controls="insta" aria-selected="false">Instagram</a>
                </li>
                <li class="nav-item w3-mobile" value="3">
                  <a class="nav-link" id="Tab-what" data-toggle="tab" href="#what" role="tab" aria-controls="what" aria-selected="false">WhatsApp</a>
                </li>
              </ul>

              <!-- Contenido de las pestañas de navegación -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="face" role="tabpanel" aria-labelledby="Tab-face">
                  <label for="usr">* URL de Facebook:</label>
                  <input type="URL" class="form-control" name="url_face" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=1");
                    ?>" required placeholder="Introduzca la URL de Facebook">
                </div>
                <div class="tab-pane fade" id="insta" role="tabpanel" aria-labelledby="Tab-insta">
                  <label for="usr">* URL de Instagram:</label>
                  <input type="URL" class="form-control" name="url_insta" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=2");
                    ?>" required placeholder="Introduzca la URL de Instagram">
                </div>
                <div class="tab-pane fade" id="what" role="tabpanel" aria-labelledby="Tab-what">
                  <label for="usr">* Número de contacto (WhatsApp):</label>
                  <input type="text" class="form-control" name="num_what" value="<?php 
                      $conn = new conexion();
                      $conn->recuperarDatos("titulo_inicio", "contenido_inicio", "id_cont_inicio=3");
                    ?>" required placeholder="Introduzca su número de celular (WhatsApp)" minlength="10" maxlength="15">
                </div>
                <small class="form-text text-muted">Los campos marcados con * son obligatorios.</small>
              </div>
              <br>
              
              <!-- Boton que activa la alerta de confirmacion para guardar -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarInicio">Guardar cambios</button>
              
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
                      <input type="submit" class="btn btn-primary" name="Guardar_uno" value="Guardar cambios">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
          </div>
        </form>
      <!-- Divisor de modulo - Formulario de Inicio/Servicios -->
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
  <script type="/scripts/jquery.js"></script>
  <script src="/dist/summernote-bs4.js"></script>
  <script src="/dist/lang/summernote-es-ES.js"></script>
  <!-- Editor de texto de summer note -->
  <script>
  //Atributos del editor de texto
  $('.summernote').summernote({
    placeholder: 'Introduzca información aqui',
    tabsize: 2,
    height: 200,
    disableDragAndDrop: true,
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['undo-redo', ['undo', 'redo']],
    ],
    lang: "es-ES",
    fontSizes: ['12', '14', '16', '18', '24', '36']
  });
  //Idioma de la barra de herramientas de 
  $(document).ready(function() {
    $('#summernote').summernote({
    lang:'es-ES',
    });
  });
  //Contador de Caracteres y validación de caracteres maximos
  $(".note-editable").on("keypress", function(){
      var limiteCaracteres = 800;
      var caracteres = $(this).text();
      var totalCaracteres = caracteres.length;

      //Actualización del valor
      $("#total-caracteres").text(totalCaracteres);

      //Validación del limite de caracteres
      if(totalCaracteres >= limiteCaracteres){
          return false;
      }
  });


  $('#myForm').on('submit', function(e) {
  if($('#TextText').summernote('isEmpty')) {
    console.log('No puede dejar el artículo vacío.');

    // cancel submit
    e.preventDefault();
  }
  else {
    // do action
  }
})
  </script>
</body>
</html>
