CREATE TABLE usuarios(
id			int(255) auto_increment not null,
nombre		varchar(100) not null,
apellidos	varchar(100) default'Hola que tal',
email		varchar(255) not null,
password	varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY (id)
);

CREATE TABLE categorias(
id			int(255) auto_increment not null,
nombre		varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY (id)
);

CREATE TABLE entradas(
id 				int(255) auto_increment not null,
usuario_id		int(255) not null,
categoria_id	int(255) not null,
titulo			varchar(255) not null,
descripcion		MEDIUMTEXT,
fecha			date not null,
CONSTRAINT pk_entradas PRIMARY KEY (id),
#Claves secundarias
CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)

);

