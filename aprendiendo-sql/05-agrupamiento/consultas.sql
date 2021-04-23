#Consultas de agrupamiento
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiciones
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>=4;
