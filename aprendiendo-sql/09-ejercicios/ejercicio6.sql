/*
6. Visualizar el nombre y los apellidos de los vendedores en una misma columna 
y su fecha de registro y el dia de la semana en la que se registraron

*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y Apellido', fecha, DAYNAME(fecha) AS 'Dia registro' FROM vendedores;