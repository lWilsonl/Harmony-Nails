<?php
    class conexion{
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

            $sql = "SELECT * FROM $tabla WHERE $condicion";
            
            $result = mysqli_query($conexion, $sql);

            $fila = mysqli_fetch_array($result);
                
            echo "$fila[$dato]";

            mysqli_close($conexion);
        }
    }
    
?>