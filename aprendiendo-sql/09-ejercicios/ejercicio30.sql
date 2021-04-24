/*
30. Mostrar los datos del vendedor con mas antiguedad en el concecionario
*/


SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*
30 PLUS. Obtener los coches con mas unidades vendidas.
*/
SELECT co.id, co.modelo, co.marca, co.precio, COUNT(e.coche_id)*e.cantidad AS 'Unidades' FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY  e.coche_id ORDER BY 5 DESC LIMIT 3 ;