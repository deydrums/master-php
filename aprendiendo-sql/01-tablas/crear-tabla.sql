/*
int(n cifras) 					ENTERO
integer(n cifras) 				ENTERO	(maximo 4294967295)
varchar(n caracteres)			STRING / ALFANUMERICO (maximo 255)
char(n caracteres)				STRING / ALFANUMERICO
float(n cifras, decimales)		DECIMAL / COMA FLOTANTE
date, time, timestamp

//STRING MAS GRANDES
TEXT 				65535 caracteres
MEDIUMTEXT			16 millones de caracteres	
LONGTEXT   			4 billones de caracteres

// ENTEROS MAS GRANDES
MEDIUMINT
BIGINT


*/

/*
CREAR TABLA
*/
CREATE TABLE usuarios(
id			int(11) auto_increment not null,
nombre		varchar(100) not null,
apellidos	varchar(255) default'Hola que tal',
email		varchar(100) not null,
password	varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY (id)

);