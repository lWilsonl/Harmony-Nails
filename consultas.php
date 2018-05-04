<?php
    class conexion{
        function recuperarDatos($id){
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

            $sql = "SELECT titulo_inicio FROM contenido_inicio WHERE (id_cont_inicio='".$id."')";
            $result = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["titulo_inicio"];
                }
            } else {
                echo "No se pudo encontrar el registro";
            }

            mysqli_close($conexion);
        }

        function recuperarContenido($id){
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

            $sql = "SELECT contenido_inicio FROM contenido_inicio WHERE (id_cont_inicio='".$id."')";
            $result = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["contenido_inicio"];
                }
            } else {
                echo "No se pudo encontrar el registro";
            }

            mysqli_close($conexion);
        }

        function recuperarInicioC($id){
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

            $sql = "SELECT contenido_inicio FROM contenido_inicio WHERE (id_cont_inicio='".$id."')";
            $result = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["contenido_inicio"];
                }
            } else {
                echo "No se pudo encontrar el registro";
            }

            mysqli_close($conexion);
        }
    }
    
?>