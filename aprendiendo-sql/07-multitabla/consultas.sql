/*
CONSULTA MULTITABLA;
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

#Mostrar las entradas con el nombre del autor y el nombre de la categoria
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id ORDER BY e.id ASC;

#INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id ORDER BY e.id ASC;

#Mostrar el nombre de las categorias y al lado cuantas entradas tienen
SELECT c.nombre, COUNT(e.id) AS 'Entradas' FROM categorias c, entradas e 
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

#LEFT JOIN muestra la fila de la izquierda y en la derecha la rellena con null o 0
SELECT c.nombre, COUNT(e.id) AS 'Entradas'
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

#RIGHT JOIN muestra la fila de la derecha y en la izquierda la rellena con null o 0
SELECT c.nombre, COUNT(e.id) AS 'Entradas'
FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY e.categoria_id;

#Mostrar el email de los usuarios y al lado cuantas entradas tienen
SELECT u.email, COUNT(e.id) AS 'Entradas' FROM usuarios u, entradas e 
WHERE u.id = e.usuario_id GROUP BY e.usuario_id;