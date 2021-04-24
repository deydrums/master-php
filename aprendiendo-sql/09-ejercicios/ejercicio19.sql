/*
19. Obtener los vendedores con dos o mas clientes
*/

SELECT c.vendedor_id, c.nombre, CONCAT(v.nombre,' ',v.apellidos) AS 'vendedor'  , COUNT(c.vendedor_id) AS 'Clientes' FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id
GROUP BY v.nombre HAVING COUNT(c.vendedor_id) >= 2;