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


#FUNCIONES CON FECHAS
SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, MONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, YEAR(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAY(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, HOUR(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, CURTIME() AS 'Fecha Actual' FROM usuarios;
SELECT email, SYSDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, DATE_FORMAT(fecha,'%d-%m-%y') AS 'Fecha Actual' FROM usuarios;

#FUNCIONES GENERALES
SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('HOLA','HOLA') FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT IFNULL (apellidos, 'Este campo esta vacio') FROM usuarios;