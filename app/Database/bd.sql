create database if not exists projecto;

use projecto;

create table if not exists clientes(
	id int primary key auto_increment,
	nome_cliente varchar(75) not null,
	email varchar(45) not null unique,
	cpnj varchar(14) not null unique,
	created_at datetime,
	updated_at datetime,
	deleted_at datetime
);

create table if not exists usuarios(
	id int primary key auto_increment,
	usuario varchar(75) not null,
	email varchar(45) not null unique,
	senha varchar(20) not null
);

insert into usuarios(usuario, email, senha) values('Amzmp', 'webinterno@amzmp.com', 'ar#min52');
		
