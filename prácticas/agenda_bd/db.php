<?php

function addNumber($nombre, $telefono)
{
    $dbConexion = new PDO('pgsql:host=g1.ifc33b.cifpfbmoll.eu;port=5432;dbname=bverges_agenda_db', "bverges", "abc123.");
    $data = [
        'nombre' => $nombre,
        'telefono' => $telefono,
    ];
    $sql = "INSERT INTO agenda (nombre, telefono) VALUES (:nombre, :telefono)";
    $stmt = $dbConexion->prepare($sql);
    //$stmt->execute($data);
    $resultado = $stmt->execute($data);
    if ($resultado) {
        echo "Todo ha ido bien";
    } else {
        echo "no ha subido";
    }
}
