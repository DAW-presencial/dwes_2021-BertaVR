<?php

spl_autoload_register(function ($nombre_clase) {
    include 'clases/'.$nombre_clase .'.php';
});

$prueba = new B(12, "hola");
$prueba2 = new A(12, "hola");


$A = new A(12, "hola");
$A2 = new A(12, "hola");


$A->property = 'property';
echo $prueba->getName();
echo $prueba2->getName();

var_dump($A);
var_dump($A2);

?>