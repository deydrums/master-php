<?php 
/*
Imprimir todas las tablas de multiplicar del numero 1 al 10 dentro de una tabla html
*/

echo "<table border='3'> <tr>"; //inicio de la tabla
	
	//IMPRIMIMOS LA INFORMACION DE LA TABLA (PRIMER FILA)
	echo "<tr>"; // fila 1  de celdas
	for ($cabecera=1; $cabecera <=10 ; $cabecera++) { 
		echo "<td>Tabla del $cabecera</td>";
	}
	echo "</tr>"; //cierre fila 1 de celdas


	//IMPRIMIMOS LA TABLA CORRESPONDIENTE (SEGUNDA FILA)
	echo "<tr>"; // fila 2  de celdas
	for ($i=1; $i <=10 ; $i++) { 
		echo "<td>";
		for ($x	= 0; $x <= 10; $x++) { 
			echo $i. " x ".$x." = ". ($i*$x)."<br>";
		}
		echo"</td>";
	}
	echo "</tr>"; //cierre fila 2 de celdas

echo "</table>"; // fin de la tabla



 ?>