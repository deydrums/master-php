/*
5. Mostrar todo los vendedores con su nombre y el numero de dias que llevan en
el concesionario

*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y Apellido', fecha, DAYNAME(fecha) AS 'Dia registro' FROM vendedores;