<?php

function burbujaDos($array) {
    $array_size = count($array);
    for($i = 0; $i < $array_size; $i ++) {
        for($j = 0; $j < $array_size; $j ++) {
            if ($array[$i] < $array[$j]) {
                $num_peq = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $num_peq;
            }
        }
    }
    return $array;
}

session_start();

if(!isset($_SESSION["burbuja"])) {
    $_SESSION["burbuja"] = array();
}

if(isset($_POST["submit"])) {
    array_push($_SESSION["burbuja"], $_POST["number"]);
}
?>

<html>
    <form method="POST" >
        <label>Número:<input type="number" name="number"/></label><br/>
        <input type="submit" name='submit' value="Ejecutar"/><br/>
    </form>
</html>

<?php
    $ordenados = burbujaDos($_SESSION["burbuja"]);
    echo "Ordenados:";
    for($i=0;$i<count($ordenados);$i++) {
        echo $ordenados[$i].PHP_EOL;
    }
?>