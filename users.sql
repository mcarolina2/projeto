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
/*insert into users (nome, email, senha, cpf, telefone, datadenascimento, cep)
 values ('carol','carol@email.com','123','12345678932','81945619873','1206/2000','12897654')*/; 
 
 select * from users;
