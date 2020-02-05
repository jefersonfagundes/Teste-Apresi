create database if not exists APRESI;

USE APRESI;

create table clientes(

COD int not null auto_increment,
NOME varchar(30) not null,
UF varchar(2) not null,
DATA_CADASTRO date not null,
PRIMARY KEY(COD)
);
