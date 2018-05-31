<?php
class Validacion{
    public function validaImagen(){
        $errors             = array();
        $allowedImages      = array('image/jpg','image/jpeg','image/png');
        $maxFileSize        = 2097152;
        $invalidTypes       = 0;
        // Verifica que al menos una imagen se selecciono
        foreach($_FILES['exa-imagen']['tmp_name'] as $tmp_name){ 
            if($tmp_name == ""){
                $errors[] = 'Por favor seleccione al menos una imagen.'; // This is okay because instance would only occur once
            }
        }
        // Verfica que la imagen sea de un tipo valido
        foreach($_FILES['exa-imagen']['type'] as $type){
            if(!in_array($type, $allowedImages)){
                $invalidTypes++;
            }
        }
        // Verifica que el tamaño de la imagen sea adecuado
        foreach($_FILES['event-images']['size'] AS $size){
            if($size > $maxFileSize){
                $invalidSize++;
            }
        }
        // Agrega los errores que deben devolverse en el array
        if($invalidTypes > 0){
            $errors[] = 'Una o mas de las imagenes tiene un tipo invalido. Por favor seleccione solo imagenes tipo jpg, png o jpeg.';
        }
        if($invalidSize > 0){
            $errors[] = 'Una o mas de las imagenes tiene un tamaño invalido. Por favor seleccione solamente imagenes de un tamaño menor a 2 MB.';
        }
        // Return errors
        return $errors;
    }
}
?>