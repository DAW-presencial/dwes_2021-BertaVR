<?php
require('db.php');
?>

<html>
    <head>
        <title>Agenda</title>
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['agenda']))
            $_SESSION['agenda'] = array();

        if (isset($_POST['submit']))
        {
            $new_name = $_POST['name'];
            $new_phone = $_POST['phone'];
            if (empty($new_name)){
                echo "<p>Debe rellenar el formulario</p><br/>";}
            elseif (empty($new_phone)){
                unset($_SESSION['agenda'][$new_name]);
            }
            else{
                $_SESSION['agenda'][$new_name] = $new_phone;
                        addNumber($new_name,$new_phone);
                    }

        }

        ?>


        <h3>Añadir contacto</h3>
        <form method="post" >
                <label>Nombre:<input name="name"/></label><br />
                <label>Teléfono:<input name="phone" type="number"/></label><br />
                <input type="submit" name='submit' value="Ejecutar"/><br />
        </form>

        <h3>Agenda</h3>
        <?php
            echo "<ol>";
            foreach ($_SESSION['agenda'] as $name => $phone)
                echo "<li>" . $name . ': ' . $phone . "</li>";
            echo "</ol>";
        ?>        
    </body>
</html>