<?php

spl_autoload_register(function ($nombre_clase) {
    include 'clases/'.$nombre_clase .'.php';
});

$prueba = new B(12, "hola");


echo $prueba->getName();

?>