#CONSULTA CON UNA CONDICION
SELECT * FROM usuarios WHERE email = 'dagarcia100@gmail.com';
/*
OPERADOR DE COMPARACION
Igual			=
Distinto		!=
Menor que		<
Mayor que		>
Menor o Igual   <=
Mayor o Igual	>=
Entre			between A and B
En 				in
Es nulo			is null
No nulo 		is not null
Como 			like
No es como 		not like

*/

#EJEMPLOS

# 1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2020;

# 1. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2020 es nula
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);