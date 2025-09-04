<?php

require_once 'carro.php';

$carroEspecial = new Carro ("rojo","nissan","grt r35",800,500,2);
$carroEspecial2 = new Carro ("naranja","nissan","grt r35",800,500,2);
$carroEspecial3 = new Carro ("azul","nissan","grt r35",800,500,2);


var_dump($carroEspecial);
var_dump($carroEspecial2);
var_dump($carroEspecial3);

?>