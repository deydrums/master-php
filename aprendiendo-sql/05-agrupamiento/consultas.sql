#Consultas de agrupamiento
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiciones
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>=4;

/*
AVG			Sacar la media
COUNT 		Contar el numero de elementos
MAX 		Valor maximo del grupo
MIN 		Valor minimo del grupo
SUM 		Sumar todo el contenido del grupo
*/
SELECT * FROM entradas;
SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;
SELECT MIN(id) AS 'Minimo id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma id', titulo FROM entradas;
