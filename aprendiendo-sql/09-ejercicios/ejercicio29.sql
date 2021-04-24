/*
29. Crear una vista llamada vendedores que incluira todos los vendedores del grupo que 
se llame vendedores A
*/
CREATE VIEW vendedoresA AS
SELECT v.* FROM grupos g
INNER JOIN vendedores v ON v.grupo_id = g.id
WHERE g.nombre = 'Vendedores A';