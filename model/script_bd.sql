CREATE DATABASE kattar;

USE kattar; 

CREATE TABLE usuario
(
    email varchar(255) PRIMARY KEY,
    nome varchar(200) not null,
    senha varchar(30) not null,
    telefone varchar(14) not null UNIQUE,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null
);



CREATE TABLE cooperativa
(
	cnpj varchar(20) PRIMARY KEY not null,
	nome varchar(200) not null,
    email varchar(255) not null UNIQUE,
    senha varchar(30) not null,
    telefone varchar(14) not null UNIQUE,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null
);

CREATE TABLE associado
(
	id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(200),
    cnpj_cooperativa varchar(20) REFERENCES cooperativa(cnpj)
);

CREATE TABLE tipo_material
(
	id int PRIMARY KEY AUTO_INCREMENT,
    descricao text not null,
    observacao text not null
);

CREATE TABLE status_coleta
(
	id int PRIMARY KEY AUTO_INCREMENT,
    descricao text not null
);


CREATE TABLE coleta 
(
   	id int PRIMARY KEY AUTO_INCREMENT,
    data_coleta date not null,
    turno_coleta varchar(60) not null,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null,
    descricao text not null,
    foto_residuo text not null,
    id_tipo_material int REFERENCES tipo_material(id),
    email_usuario varchar(200) REFERENCES usuario(email),
    id_status int REFERENCES status_coleta(id)
);

CREATE TABLE historico_coleta
(
	id int PRIMARY KEY AUTO_INCREMENT,
    data_historico date,
    observacao text not null,
    id_status int REFERENCES status_coleta(id),
    id_associado int REFERENCES associado(id)
);


