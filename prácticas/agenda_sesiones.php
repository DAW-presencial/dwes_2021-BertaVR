<?php
    session_start();
    if (!isset($_SESSION["agenda"])){
        $_SESSION["agenda"] = array();
    }
    if (isset($_POST["submit"])) {
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        if(!$nombre){
            echo "Tienes introducir un nombre";
        }
        elseif (!$telefono){
            unset($_SESSION["agenda"][$nombre]);
            echo "Tienes introducir un teléfono";

        }
        else {
            $_SESSION["agenda"][$nombre] = $telefono;
        }
    }

?>

<html>
    <h2>Nuevo contacto</h2>
    <form method="POST" >
        <label for="nombre">Nombre: </label><input type="text" name="nombre"/>
        <label for="nombre">Telefono: </label><input type="text" name="telefono"/>
        <input type="submit" name='submit' value="Ejecutar"/><br />
    </form>
</html>

<?php
    $agenda = $_SESSION["agenda"];
    if (count($agenda) == 0)
            echo "<p>No hay contactos en la agenda.</p>";
        else
        {
            echo "<ul>";
            foreach ($agenda as $nombre => $telefono)
                echo "<li>" . $nombre . ': ' . $telefono . "</li>";
            echo "</ul>";
        }
?>