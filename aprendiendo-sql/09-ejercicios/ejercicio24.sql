/*
24. Listar los encargos con el nombre del coche, el nombre del cliente y
el nombre de la ciudad, pero unicamente cuando sean de barcelona
*/
SELECT e.id, co.modelo, c.nombre AS 'Cliente',c.ciudad FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE ciudad = 'Barcelona';