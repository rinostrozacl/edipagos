<?php
// Comment if you don't want to allow posts from other domains
header('Access-Control-Allow-Origin: *');

// Allow the following methods to access this file
header('Access-Control-Allow-Methods: OPTIONS, GET, DELETE, POST, HEAD, PATCH');

// Allow the following headers in preflight
header('Access-Control-Allow-Headers: content-type, upload-length, upload-offset, upload-name');

// Allow the following headers in response
header('Access-Control-Expose-Headers: upload-offset');
    
    /*
    //datos del arhivo
    $nombre_archivo = $_FILES['file']['name'];
    $tipo_archivo = $_FILES['file']['type'];
    $tamano_archivo = $_FILES['file']['size'];
        
    //compruebo si las características del archivo son las que deseo
    if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
        echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
    }else{
        if (move_uploaded_file($_FILES['file']['tmp_name'],  $nombre_archivo)){
                echo "El archivo ha sido cargado correctamente.";
        }else{
                echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }
    }
    
    */

    echo "Uploaded";

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

?>