<?php
    class conexion{
        // Funcion encargada de realizar los selects generales, basandose en un dato especifico, la tabla y la condición
        function recuperarDatos($dato, $tabla, $condicion){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "harmonynails";

            // Create connection
            $conexion = mysqli_connect($servername, $username, $password, $dbname) or die ("Error en la conexión");
            // Verificar conexion
            if (!$conexion) {
                die("Fallo la conexion a la base de datos" . mysqli_connect_error());
            }
            //Si la conexión se realiza con exito, proceder a realizar la consulta de la base de datos
            else{
                $sql = "SELECT * FROM $tabla WHERE $condicion";
                $result = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_array($result);
                echo "$fila[$dato]";
                mysqli_close($conexion);
            }
        }
    }
?>