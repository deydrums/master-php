/*
15. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron.
*/


SELECT c.nombre, COUNT(e.id) AS 'Pedidos' FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY e.cliente_id ORDER BY COUNT(e.id) DESC LIMIT 2;