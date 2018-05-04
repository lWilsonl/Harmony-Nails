<?php 
	//Realiar la conexion
	$conexion= mysqli_connect('localhost', 'root', '', 'harmonynails') or die ("Error en la conexión");
	
	//Verificar la conexion
	if (!$conexion) {
    	die("Conexión fallida: " . mysqli_connect_error());
	}

	$
	
	//Actualizacion
	$sql2= "INSERT INTO contenido_inicio (id_cont_inicio, titulo_inicio, contenido_inicio, id_usuario_FK) values ('".$consecutivoint."', 'Historia', 'Esto es una prueba para ver si el contenido se guarda', '1')";

	//Resultado
	$ada= mysqli_query($conexion, $sql2) or die ("Error en la conexion gege");

	mysqli_close($conexion);

	// Cosas para probar
	/*echo $_POST['txt-content'];
	
	//Consulta a base de datos
	$sql1= "SELECT id_cont_inicio FROM contenido_inicio ORDER BY id_cont_inicio DESC LIMIT 1";
	$popo= mysqli_query($conexion, $sql1) or die ("raios xd");
	$array= mysqli_fetch_array($popo);
	$consecutivo= "$array[0]";
	$consecutivoint= (int)$consecutivo+1;*/
 ?>
	
