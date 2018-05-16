<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "harmonynails";
    // Crear conexion
    $conexion= mysqli_connect($servername, $username, $password, $dbname) or die ("Error en la conexión");
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    // Formulación de los querys a ejecutar una vez se llama a este php, despues de realizar la conexión
    $sql1 = "UPDATE contenido_inicio SET titulo_inicio='".$_POST["Titulo_uno"]."' , contenido_inicio='".$_POST["Contenido_uno"]."' WHERE (id_cont_inicio=1)";
    $sql2 = "UPDATE contenido_inicio SET titulo_inicio='".$_POST["Titulo_dos"]."' , contenido_inicio='".$_POST["Contenido_dos"]."' WHERE (id_cont_inicio=2)";
    $sql3 = "UPDATE contenido_inicio SET titulo_inicio='".$_POST["Titulo_tres"]."' , contenido_inicio='".$_POST["Contenido_tres"]."' WHERE (id_cont_inicio=3)";
    $sql4 = "UPDATE contenido_inicio SET titulo_inicio='".$_POST["Titulo_cuatro"]."' , contenido_inicio='".$_POST["Contenido_cuatro"]."' WHERE (id_cont_inicio=4)";
    $sql5 = "UPDATE contenido_inicio SET titulo_inicio='".$_POST["Titulo_cinco"]."' , contenido_inicio='".$_POST["Contenido_cinco"]."' WHERE (id_cont_inicio=5)";

    // Ejecución de los antes mencionados querys
    $Update1 = mysqli_query($conexion, $sql1) or die ('No se pudo ejecutar el query #1 '.$sql1.'Error: '.mysqli_error($conexion));
    $Update2 = mysqli_query($conexion, $sql2) or die ('No se pudo ejecutar el query #2 '.$sql2.'Error: '.mysqli_error($conexion));
    $Update3 = mysqli_query($conexion, $sql3) or die ('No se pudo ejecutar el query #3 '.$sql3.'Error: '.mysqli_error($conexion));
    $Update4 = mysqli_query($conexion, $sql4) or die ('No se pudo ejecutar el query #4 '.$sql4.'Error: '.mysqli_error($conexion));
    $Update5 = mysqli_query($conexion, $sql5) or die ('No se pudo ejecutar el query #5 '.$sql5.'Error: '.mysqli_error($conexion));

    //Antes de redireccionar al cpanel, cierra la conexion abierta
    mysqli_close($conexion);
    header("Location: cpanel.php");
?>