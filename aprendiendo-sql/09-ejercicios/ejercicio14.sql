/*
14. Visualizar las unidades totales vendidas de cada coche a cada cliente
Mostrando el nombre del producto, nombre de cliente, y la suma de unidades.
*/
SELECT c.modelo AS 'Coche', cl.nombre AS 'Cliente' , SUM(e.cantidad) AS 'Unidades' FROM encargos e
INNER JOIN coches c ON e.coche_id = c.id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;