CREATE DATABASE kattar;

USE kattar; 

CREATE TABLE usuario 
(
    nome varchar(200) not null,
    email varchar(255) PRIMARY KEY,
    senha varchar(30) not null,
    telefone varchar(14) not null UNIQUE,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null
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
    tipo_material varchar(200) not null,
    foto_residuo text not null
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
	nome varchar(200) PRIMARY KEY
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

CREATE TABLE historico_coleta
(
	id int PRIMARY KEY AUTO_INCREMENT,
    data_historico date,
    observacao text not null,
    status_historico varchar(60)
);



CREATE TABLE usuario 
(
    nome varchar(200) not null,
    email varchar(255) PRIMARY KEY,
    senha varchar(30) not null,
    telefone varchar(14) not null UNIQUE,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null
);

CREATE TABLE coleta 
(
   id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) unique references email_usuario(email),
    data_coleta date not null,
    turno_coleta varchar(60) not null,
    estado varchar(60) not null,
    municipio varchar(60) not null,
    bairro varchar(60) not null,
    logradouro varchar(80) not null,
    descricao text not null,
    tipo_material varchar(200) not null,
    foto_residuo text not null   
);

ALTER TABLE coleta
ADD COLUMN email_usuario varchar(255) NOT NULL,
ADD CONSTRAINT fk_email_usuario FOREIGN KEY (email_usuario) REFERENCES usuario(email);

/*

--- RELAÇÃO MxM ---

relação para os materiais
relação para os associados, coleta e historico de coleta

*/