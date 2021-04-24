/*
21. Obtener los nombres y ciudades de los clientes con encargos de 3 unidades en adelante
*/
SELECT c.nombre AS 'Cliente', c.ciudad, SUM(e.cantidad) AS 'Unidades encargadas' FROM encargos e
INNER JOIN clientes c ON e.cliente_id = c.id
 GROUP BY e.cliente_id HAVING SUM(e.cantidad) >=3;
