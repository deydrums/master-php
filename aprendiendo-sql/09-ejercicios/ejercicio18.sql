/*
18. Listar los clientes que han hecho algun encargo del coche "Marcedes Ranchera"
*/


SELECT c.nombre AS 'Cliente', co.modelo AS 'AUTO' FROM encargos e
INNER JOIN coches co ON  co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE co.id = 3;