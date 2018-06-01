<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    $user=$_POST['User'];
    $pass=$_POST['Pass'];
    $dato="user";

    $sql = "SELECT * FROM usuario_nails WHERE (user='".$user."') AND (password='".$pass."')";
    $result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($result);
    echo "$fila[$dato]";
    
    if ($fila[$dato]=="") {
        header("Location: ../login.php");
    }
    else{
        header("Location: ../cpanel.php");
    }
?>