<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    //Trae la carpeta en la que se subira la imagen    
    $carpeta = $_POST["carpeta"];
    //Establece la ruta en la que se subira la imagen, tomando la direccion raiz
    $ruta=$_SERVER['DOCUMENT_ROOT']."/images/".$carpeta;
    //Obtiene la extension de la imagen
    $extension = pathinfo($_FILES["exa_imagen"]["name"], PATHINFO_EXTENSION);
    //Trae el nombre que va a asignar el usuario a la imagen a subir
    $nombre = $_POST["Titulo_imagen"];
    //Concatenacion de la ruta en la que se subira el archivo
    $archivo_n=$ruta.$nombre.".".$extension;
    
    //Sube el archivo a la carpeta correspondientes
    move_uploaded_file($_FILES["exa_imagen"]["tmp_name"], $archivo_n);

    // Formulación de los querys a ejecutar una vez se llama a este php, despues de realizar la conexión
    $query="INSERT INTO galeria_ubicaciones(descrip, cat_img, ruta_imagen) VALUES('".$nombre."', 'gallery','".$archivo_n."')";


    // Ejecución de los antes mencionados querys
    $insert = mysqli_query($conexion, $query) or die ('No se pudo subir la imagen '.$query.'Error: '.mysqli_error($conexion));

    mysqli_close($conexion);
    header("Location: ../cpanel.php");
?>