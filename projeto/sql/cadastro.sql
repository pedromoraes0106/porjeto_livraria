create database bd_livraria;
use bd_livraria;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    foto varchar(100),
    primary key (id_usuario)
);

create table livro(
	id_livro int not null auto_increment,
    fk_usuario int not null,
    titulo varchar(45),
    editora varchar(45),
    genero varchar(30),
    descricao text,
    data_cadastro date,
    status_livro varchar(30),
    primary key (id_livro),
    foreign key (fk_usuario) references usuario(id_usuario)
);

select * from livro;
