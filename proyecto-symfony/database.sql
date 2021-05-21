CREATE DATABASE IF NOT EXISTS symfony_master;
USE symfony_master;

CREATE TABLE IF NOT EXISTS users(
id                      int(255) auto_increment not null,
role                    varchar(50),
name                    varchar(100),
surname                 varchar(200),
email                   varchar(255),
password                varchar(255),
create_at               datetime,
CONSTRAINT pk_users PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS tasks(
id                      int(255) auto_increment not null,
user_id                 int(255) not null,
title                   varchar(255),
content                 text,
priority                varchar(20),
hours                   int(100),
create_at               datetime,
CONSTRAINT pk_tasks PRIMARY KEY (id),
CONSTRAINT pk_task_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

//crear entidades a partir de la bbdd
php bin/console doctrine:mapping:import App\Entity annotation --path=src/Entity
//metodos setter and getter
 php bin/console make:entity --regenerate App