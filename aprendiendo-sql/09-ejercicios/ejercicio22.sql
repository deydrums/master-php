/*
22. Mostrar listado de clientes (numero de cliente y nombre)
Mostrar el numero de vendedor y su nombre..
*/
SELECT c.id, c.nombre AS 'Cliente', c.vendedor_id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor' FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id;