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