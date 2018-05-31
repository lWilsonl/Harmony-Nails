<?php
/* Class dedicada a crear una conexión con la base de datos*/
class connect{
    public function conectardb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "harmonyn_db";
        $conexion= mysqli_connect($servername, $username, $password, $dbname) or die ("Falló la conexión a la base de datos.Error: ");
        return $conexion;
    }
}
?>