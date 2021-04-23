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

/*
OPERADORES LOGICOS
O 			 	OR
Y 				AND
NO 				NOT
*/

/*
COMODINES 
Cualquier cantidad de caracteres		%
Un caracter desconocido					_

*/
#EJEMPLOS

# 1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2020;

# 2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2020 es nula
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A y que su 
# contraseña contenga pedro1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 'pedro1234';

SELECT email FROM usuarios WHERE apellidos LIKE '%onz%' AND password LIKE '%1234';

# 4. Mostrar todos los registros de la tabla usuarios cuyo años sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Mostrar todos los registros de la tabla usuarios cuyo nombre tenga mas de 
# 4 letras y que se hayan registrado antes del 2021, y mostrar en mayus.
SELECT UPPER(nombre) AS 'NOMBRE', apellidos FROM usuarios WHERE (LENGTH(nombre)>4) AND (YEAR(fecha)<2021);

#ORDENAR
SELECT * FROM usuarios ORDER BY id ASC;
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios ORDER BY fecha DESC;

#LIMIT
SELECT * FROM usuarios LIMIT 3;
SELECT * FROM usuarios LIMIT 0,2;