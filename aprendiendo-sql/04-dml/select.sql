#MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA
SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS
SELECT * FROM usuarios;

#OPERADORES ARITMETICOS
SELECT email,(7+7) AS 'OPERACION' FROM usuarios;
SELECT id, email,(id + 7) AS 'OPERACION' FROM usuarios;



#ORDENAR POR ID
SELECT id, email,(7%7) AS 'OPERACION' FROM usuarios ORDER BY id ASC;
SELECT id, email,(7%7) AS 'OPERACION' FROM usuarios ORDER BY id DESC;


#FUNCIONES MATEMATICAS
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;
SELECT PI() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.89456,1) AS 'OPERACION' FROM usuarios;
SELECT SQRT(64) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.99,1) AS 'OPERACION' FROM usuarios;
SELECT ROUND(id,1) AS 'OPERACION' FROM usuarios;


#FUNCIONES CON TEXTO

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'Conversion' FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT email, LENGTH (CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT UPPER(CONCAT('     ', nombre, '     ', apellidos, '     ')) AS 'Conversion' FROM usuarios;
SELECT TRIM(UPPER(CONCAT('     ', nombre, '     ', apellidos, '     '))) AS 'Conversion' FROM usuarios;
