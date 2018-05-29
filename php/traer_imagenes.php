<?php
	function recuperarImagenes($categoria){
		$dir_folder = './images/'.$categoria; //Ruta del directorio de imagenes
		$cant_arch = glob($dir_folder . "*.{JPG,jpg,JPEG,jpeg,PNG,png,}", GLOB_BRACE);
		$folder = opendir($dir_folder);
	 
		if($cant_arch > 0){
		 	while(false !== ($archivo = readdir($folder))){
		  		$dir_archivo = $dir_folder."/".$archivo;
		  		$extension = strtolower(pathinfo($archivo ,PATHINFO_EXTENSION));
		  		if($extension=='jpg' || $extension =='png' || $extension == 'JPG' || $extension == 'PNG' || $extension == 'jpeg' || $extension == 'JPEG') {
		  			?>
		        	<img src='<?php echo $dir_archivo; ?>'/><br>
		            <?php
		  		}
		 	}	
		}
		else{
	 		echo "La carpeta está vacía";
		}
		closedir($folder);
	}
?>