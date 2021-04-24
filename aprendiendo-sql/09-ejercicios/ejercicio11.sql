/*
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo.
*/
SELECT cargo, COUNT(id) AS 'Empleados' FROM vendedores GROUP BY cargo ORDER BY id DESC;