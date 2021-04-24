/*
17. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia INC'
*/

SELECT  e.id AS 'No. Encargo', c.nombre AS 'Cliente', co.modelo AS 'Auto', e.cantidad, e.fecha AS 'Fecha'  FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON CO.id = e.cliente_id
WHERE c.id =2;
