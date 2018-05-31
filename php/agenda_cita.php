<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }
    $NombreA=$_POST["Nombre_aplica"];
    $NumeroA=$_POST["Numero_aplica"];
    $FechaA=$_POST["fechaCitaAplica"];
    ////
    $NombreC=$_POST["Nombre_curso"];
    $NumeroC=$_POST["Numero_curso"];
    $FechaC=$_POST["fechaCitaCurso"];

    // Formulación de los querys a ejecutar una vez se llama a este php, despues de realizar la conexión
    if ($NombreA == "" || $NumeroA == "" || $FechaA == "") {
        $query="INSERT INTO citas_cursos(nombre, numero, fecha) VALUES('".$NombreC."', '".$NumeroC."', '".$FechaC."')";
    }
    else{
        $query="INSERT INTO citas_aplica(nombre, numero, fecha) VALUES('".$NombreA."', '".$NumeroA."', '".$FechaA."')";
    }

   // Ejecución de los antes mencionados querys
    $insert = mysqli_query($conexion, $query) or die ('No se pudo agendar la cita '.$query.'Error: '.mysqli_error($conexion));
 
    mysqli_close($conexion);
    header("Location: ../citas.php");
?>