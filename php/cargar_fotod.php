<?php
    function obtenerFoto(){
        // Conexion a la base de datos
        require'dbconect.php';
        $clase = new connect();
        $conexion=$clase->conectardb();
        if (!$conexion) {
            die("Fallo la conexion a la base de datos" . mysqli_connect_error());
        }
        $img_sel = $_POST['id_imagen'];
        $sql = "SELECT * FROM ";
        $result = mysql_query($sql);
        while($row=mysql_fetch_array($result))
        {
            echo ""; no terminado
        }
        mysqli_close($conexion);
    }
?>