/*
Mostrar el nombre y el salario de los vendedores con cargo de 'Ayudante en tienda'
*/

SELECT nombre, sueldo, cargo FROM vendedores WHERE cargo LIKE "Ayudante en tienda";