
<html>

<form method="post" enctype = "multipart/form-data">
    <label for="archivo1">Envía un archivo: </label>
    <input type="file" name="archivo1"></input><br>
    <label for="archivo2">Envía otro archivo: </label>
    <input type="file" name="archivo2"></input><br>
    <input type = 'submit' name = "submit"/>
</form>

</html>


<?php 

if(isset($_POST["submit"])){
    foreach ($_FILES as $file) {
        if($file['error']){ 
            echo "Hubo un error de código " . $file['error'] . " al subir el archivo " . $file['name'] .'<br>';

        }else if (!move_uploaded_file($file['tmp_name'], 'archivosEnviados/' . $file['name'])) {

            echo "Ha fallado la subida del archivo debido a un error interno";
        }else{
            echo"El archivo " . $file['name'] . " se ha subido satisfactoriamente. <br>";
        }
    }
}

?>