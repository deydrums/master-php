/*
28. Listar los vendedores y el numero de clientes
Se deben mostrar tengan o no clientes
*/

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor', COUNT(c.vendedor_id) AS 'Clientes' FROM vendedores v
LEFT JOIN clientes c ON v.id = c.vendedor_id
GROUP BY v.id;