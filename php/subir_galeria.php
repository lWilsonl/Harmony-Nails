<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    $nombreimg=$_FILES['exa_imagen']['name'];
   // $archivo=$_FILES['exa_imagen']['tmp_name'];
    $carpeta="/gallery";
    $ruta=$_SERVER['DOCUMENT_ROOT']."/images/gallery/";

    move_uploaded_file($_FILES['userfile']['tmp_name'], $ruta.$_FILES['exa_imagen']['name']);

    // Formulación de los querys a ejecutar una vez se llama a este php, despues de realizar la conexión
    $query=mysqli_query("INSERT INTO galeria_ubicaciones(descrip, cat_img, ruta_imagen) VALUES('".$nombreimg."', gallery,'".$ruta."')");

    // Ejecución de los antes mencionados querys
    $insert = mysqli_query($conexion, $query) or die ('No se pudo subir la imagen '.$query.'Error: '.mysqli_error($conexion));

    mysqli_close($conexion);
    header("Location: ../cpanel.php");
?>