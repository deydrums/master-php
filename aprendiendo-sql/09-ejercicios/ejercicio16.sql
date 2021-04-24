/*
16. Obtener listado de clientes atendidos por el vendedor "David Lopez"
*/

SELECT c.nombre, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor' FROM clientes c
INNER JOIN vendedores v ON c.vendedor_id = v.id
WHERE v.id = 1;