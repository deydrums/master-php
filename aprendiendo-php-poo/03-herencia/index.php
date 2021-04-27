<?php 
require_once 'clases.php';

$persona = new Persona();
//$persona->setNombre("Victor");
var_dump($persona);

$informatico = new Informatico();
//$informatico->setAltura(1.90);
//echo $informatico->sabeLenguajes("HTML, CSS, PHP, JS, etc");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);

 ?>