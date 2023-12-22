use Biblioteca;

Delimiter $$
create procedure Livros_Lidos(in usuario_id int)
BEGIN
	SELECT * FROM livros 
    INNER JOIN lidos
    WHERE id_usuario = usuario_id;
END $$ 
Delimiter ;

Delimiter $$
create procedure Livros_Lendo(in usuario_id int)
BEGIN
	SELECT * FROM livros 
    INNER JOIN lendo
    WHERE id_usuario = usuario_id;
END $$ 
Delimiter ;

Delimiter $$
create procedure Livros_Quer_Ler(in usuario_id int)
BEGIN
	SELECT * FROM livros 
    INNER JOIN querLer
    WHERE id_usuario = usuario_id;
END $$ 
Delimiter ;

