<?php
session_start();
if (isset($_POST['submit'])) {

    $_SESSION["usuario"] = $_POST['user'];

    if ($_SESSION['usuario'] == 'admin') {
        echo "eres admin";
    } else if ($_SESSION['usuario'] == 'user') {
        echo "eres user";
    } else {
        echo "Inválido";
    }
}

session_destroy();
?>

<html>
<form method=post>
    <input type="text" name="user">
    <input type="submit" name="submit">

</form>

</html>