create database assadosdb;

use assadosdb;

create table produtos(
    id int(9) auto_increment,
    descricao varchar(255) not null,
    preco decimal(5,2) not null,
    destque varchar(255) not null,
    primary key (id)
);