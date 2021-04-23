/*
SUBCONSULTAS:
-Son consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
-Jugando con las claves ajenas / foraneas.
*/
#SACAR USUARIOS CON ENTRADAS
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

#SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLE DE GTA
SELECT nombre , apellidos FROM usuarios WHERE id 
	IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

#SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE
SELECT titulo FROM entradas WHERE categoria_id
	IN (SELECT id FROM categorias WHERE nombre = 'accion');


#MOSTRAR LAS CATEGORIAS CON MAS DE 3 o mas ENTRADAS
SELECT * FROM categorias WHERE id
	IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) > 3); 

#MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN VIERNES
SELECT * FROM usuarios WHERE id
	IN (SELECT usuario_id FROM entradas WHERE  DAYNAME(fecha) = 'Friday' );

#MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS
SELECT * FROM usuarios WHERE id =
	(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1); 

#MOSTRAR LAS CATEGORIAS SIN ENTRADAS
SELECT * FROM categorias WHERE id 
	NOT IN (SELECT categoria_id FROM entradas);