<?php
    require "dbconnect.php";
    $clase = new connect();
    $conexion=$clase->conectardb();
    // Verificar conexion
    if (!$conexion) {
        die("Fallo la conexion a la base de datos" . mysqli_connect_error());
    }

    if (isset($_FILES['valor_imagen'])){
            $cantidad = count($_FILES['valor_imagen']['tmp_name']);
            echo "cantidad: $cantidad";
            //Validacion de cantidad de imagenes, deberán ser menor a 10
            if ($cantidad < 11){
                //Ciclo que sube cada una de las imagenes contenidas en el vector valor_imagen[]
                for ($i=0; $i <$cantidad ; $i++) {
                
                    $nombre_imagen = $_FILES['valor_imagen']['name'][$i];
                    echo "<br>Nombre: $nombre_imagen";
                    $tipo_imagen = $_FILES['valor_imagen']['type'][$i];
                    echo "<br>Tipo: $tipo_imagen";
                    $tamanio_imagen = $_FILES['valor_imagen']['size'][$i];
                    echo "<br>Tamaño: $tamanio_imagen";
                    //Comprobar que el fichero sea una imagen
                    if ($tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpeg") {
                        if ( $tamanio_imagen <= 10000000 && $tamanio_imagen > 0) {
                            
                            //Ruta de la carpeta destino del servidor
                            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/images/gallery/';
                            echo "$carpeta_destino<br>";
                            //Mover imagen de la carpeta temporal al directoriio escogido.
                            move_uploaded_file($_FILES['valor_imagen']['tmp_name'][$i],$carpeta_destino.$nombre_imagen);
                        }
                    }
                }
            } 
        }


    mysqli_close($conexion);
    header("Location: ../cpanel.php");
?>