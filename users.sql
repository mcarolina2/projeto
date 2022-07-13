use test;
create table users (
id integer primary key auto_increment,
nome varchar(255),
email varchar(255), 
senha varchar(255),
cpf varchar(11),
telefone varchar(11),
datadenascimento date,
cep varchar(8)
); 

 select * from users;
 create table anuncios ( 
id integer primary key auto_increment,
titulo varchar(255),
ano date,
descricao varchar(255), 
user_id integer,
img BLOB,
constraint foreign key (user_id) references users(id)
); drop table anuncios: