/*
8. Visualizar todos los coches en cuya marca exista la letra "a" y cuyo modelo empiece por "F"
*/


SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';