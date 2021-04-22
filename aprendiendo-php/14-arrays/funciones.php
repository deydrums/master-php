<?php 

$cantantes = ['2pac', 'Drake', 'Taylor Swift', 'Adele'];
$numeros = [1,2,5,9,7,6,3];
//Ordenar alfabeticamente ascendente
asort($cantantes);
//Ordenar alfabeticamente descendente
arsort($cantantes);
//Ordenar numeros 
sort($numeros);

var_dump($numeros);
//Añadir elementos a un array
$cantantes[] = 'Ed Sheran';
array_push($cantantes, 'Paramore');
//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);
//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
//Dar la vuelta
var_dump(array_reverse($numeros));
//Buscar dentro de un array
$resultado = array_search('Drake',$cantantes);
var_dump($resultado);

//Contar numero de elementos
echo count($cantantes);
 ?>