<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    // Formulación de los querys a ejecutar una vez se llama a este php, despues de realizar la conexión
    $sql1 = "UPDATE contenido_servicio SET titulo_servicio='".$_POST["Titulo_uno"]."' , contenido_servicio='".$_POST["Contenido_uno"]."' WHERE (id_cont_servicio=1)";
    $sql2 = "UPDATE contenido_servicio SET titulo_servicio='".$_POST["Titulo_dos"]."' , contenido_servicio='".$_POST["Contenido_dos"]."' WHERE (id_cont_servicio=2)";

    // Ejecución de los antes mencionados querys
    $Update1 = mysqli_query($conexion, $sql1) or die ('No se pudo ejecutar el query #1 '.$sql1.'Error: '.mysqli_error($conexion));
    $Update2 = mysqli_query($conexion, $sql2) or die ('No se pudo ejecutar el query #2 '.$sql2.'Error: '.mysqli_error($conexion));

    //Antes de redireccionar al cpanel, cierra la conexion abierta
    mysqli_close($conexion);
    header("Location: ../cpanel.php");
?>