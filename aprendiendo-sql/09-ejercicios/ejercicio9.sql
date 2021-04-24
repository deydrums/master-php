/*
9. Mostrar todos los vendedores de grupo numero 2, ordenados por salario de mayor
a menor
*/

SELECT nombre, apellidos, grupo_id, sueldo FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;