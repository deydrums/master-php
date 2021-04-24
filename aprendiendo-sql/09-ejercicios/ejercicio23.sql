/*
23. Listar todos los encargos realizados con la marca de coche y
el nombre del cliente.
*/
SELECT e.id, co.marca, c.nombre AS 'Cliente' FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id;