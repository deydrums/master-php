<?php 
require_once 'coche.php';

$coche = new Coche("Amarillo","Renault","Clio",150,200,5);
$coche2 = new Coche("Amarillo","Toyota","Corolla",250,200,2);
$coche3 = new Coche("Amarillo","Nissan","Frontier",150,100,3);
$coche4 = new Coche("Amarillo","Mercedes","Clase A",100,120,5);

var_dump($coche);
var_dump($coche2);
var_dump($coche3);
var_dump($coche4);

 ?>