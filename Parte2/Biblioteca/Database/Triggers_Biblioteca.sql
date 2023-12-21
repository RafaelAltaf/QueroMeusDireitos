use Biblioteca;

DELIMITER $$
create trigger insert_usuario after insert on Usuarios
for each row
begin
	insert into log(descricao, data_hora) values(concat('O usuário de ID ', new.id_usuario, " foi criado com os respectivos dados: Email = ", new.email, " Nome = ", new.nome, " Senha = ", new.senha), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger update_usuario after update on Usuarios
for each row
begin
	insert into log(descricao, data_hora) values(concat('Os dados do usuário de ID ', new.id_usuario, ' foram atualizados. Dados antigos: Email = ', old.email, " Nome = ", old.nome, " Senha = ", old.senha," Dados atuais: Email = ", new.email, " Nome = ", new.nome, " Senha = ", new.senha), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger delete_usuario before delete on Usuarios
for each row
begin
	insert into log(descricao, data_hora) values(concat('O usuário de ID ', old.id_usuario, " foi deletado. Seus dados eram os seguintes: Email = ", old.email, " Nome = ", old.nome, " Senha = ", old.senha), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;
desc usuarios;

DELIMITER $$
create trigger insert_livro after insert on Livros
for each row
begin
	insert into log(descricao, data_hora) values(concat('O livro de ID ', new.id_livro, " foi cadastrado com os respectivos dados: Título = ", new.titulo, " Autor = ", new.autor, " Data de Publicação = ", new.data_publicacao), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger update_livro after update on Livros
for each row
begin
	insert into log(descricao, data_hora) values(concat("Os dados do livro de ID ", new.id_livro, " foram atualizados. Dados antigos: Título = ", old.titulo, " Autor = ", old.autor, " Data de Publicação = ", old.data_publicacao," Dados atuais: Título = ", new.titulo, " Autor = ", new.autor, " Data de Publicação = ", new.data_publicacao), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger delete_livros before delete on Livros
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", old.id_livro, " foi deletado. Seus dados eram os seguintes: Título = ", old.titulo, " Autor = ", old.autor, " Data de Publicação = ", old.data_publicacao), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger insert_querLer after insert on querLer
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", new.id_livro, " foi adicionado à lista de livros que o usuário ",new.id_usuario,"quer ler"), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger delete_querLer before delete on querLer
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", old.id_livro, " foi retirado da lista de livros que o usuário ",old.id_usuario,"quer ler"), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger insert_lidos after insert on lidos
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", new.id_livro, " foi adicionado à lista de livros que o usuário ",new.id_usuario,"já leu."), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger delete_lidos before delete on lidos
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", old.id_livro, " foi retirado da lista de livros que o usuário ",old.id_usuario,"já leu."), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger insert_lendo after insert on lendo
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", new.id_livro, " foi adicionado à lista de livros que o usuário ",new.id_usuario,"está lendo."), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;

DELIMITER $$
create trigger delete_lendo before delete on lendo
for each row
begin
	insert into log(descricao, data_hora) values(concat("O livro de ID ", old.id_livro, " foi retirado da lista de livros que o usuário ",old.id_usuario,"está lendo."), CURRENT_TIMESTAMP);
end $$ 
DELIMITER ;