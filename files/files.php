

<html>

    <form method="post" enctype = "multipart/form-data">
        <label for="archivo1">Primer archivo: </label>
        <input type="file" name="archivo1"></input><br>
        <label for="archivo2">Segundo archivo: </label>
        <input type="file" name="archivo2"></input><br>
        <input type = 'submit' name = "submit"/>
    </form>

</html>


<?php // no olvidar dar permisos a la carpeta archivosEnviados

    if(isset($_POST["submit"])){
        foreach ($_FILES as $file) {
            if($file['error']){ //si el error no es 0
                echo "Hubo un error de código " . $file['error'] . " al subir el archivo " . $file['name'] .'<br>';

            }else if (!move_uploaded_file($file['tmp_name'], 'archivosEnviados/' . $file['name'])) {

                echo "Falló";
            }else{
                echo"Subido archivo " . $file['name'] . "<br>";
            }
        }
    }

?>