<?php
  $guardar=$_POST["GUARDAR_SERVICIO"];
  
  if ($guardar == "Guardar cambios") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "harmonynails";
    $titulo=$_POST["TITULO_SERVICIO"];
    $contenido=$_POST["CONTENIDO_SERVICIO"];
    $parrafo=$_POST['OPCION_S'];
    $parrafoint= (int)$parrafo;

    // Crear conexion
    $conexion= mysqli_connect($servername, $username, $password, $dbname) or die ("Error en la conexión");
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    $sql = "UPDATE contenido_inicio SET titulo_inicio='".$titulo."' , contenido_inicio='".$contenido."' WHERE (id_cont_inicio='".$parrafoint."')";

    if (mysqli_query($conexion, $sql)) {
        echo "Se actualizo el contenido correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    $titulo="";
    $contenido="";
    $parrafo="";
    $parrafoint="";
    mysqli_close($conexion);
    header("Location: cpanel.php");
  }
?>