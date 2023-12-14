create database Biblioteca;
use Biblioteca;

-- Criando um usuário no mysql para que o programa execute sem que seja necessário realizar alterações na conexão com o banco.
create user if not exists teste_rafaelAltaf identified by '';
grant select, insert, delete, update
on Biblioteca.*
to teste_rafaelAltaf;

-- Criando as tabelas do banco de dados
create table Usuarios(
id_usuario int not null primary key auto_increment,
login varchar(45),
senha varchar(45)
);

create table Livros(
id_livro int not null primary key auto_increment,
titulo varchar(80) not null,
autor varchar(80) not null,
ano_publicacao date not null
);
create table QuerLer(
id_livro int not null,
id_usuario int not null,
foreign key (id_livro) references Livros(id_livro),
foreign key (id_usuario) references Usuarios(id_usuario)
);

create table Lendo(
id_livro int not null,
id_usuario int not null,
foreign key (id_livro) references Livros(id_livro),
foreign key (id_usuario) references Usuarios(id_usuario)
);

create table Lidos(
id_livro int not null,
id_usuario int not null,
foreign key (id_livro) references Livros(id_livro),
foreign key (id_usuario) references Usuarios(id_usuario)
);

create table log( -- tabela que registra determinadas alterações e interações nas tabelas do banco de dados
id_log int not null primary key auto_increment,
descricao varchar(200)
);

