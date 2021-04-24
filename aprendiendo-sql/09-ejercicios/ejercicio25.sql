/*
25.Obtener una lista de los nombres de los clientes con el 
importe de sus encargos acumulados
*/
SELECT c.nombre, SUM(co.precio)*e.cantidad AS 'IMPORTE' FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY c.id ORDER BY 2 ASC;