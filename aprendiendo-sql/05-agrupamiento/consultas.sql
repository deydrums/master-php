#Consultas de agrupamiento
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;
