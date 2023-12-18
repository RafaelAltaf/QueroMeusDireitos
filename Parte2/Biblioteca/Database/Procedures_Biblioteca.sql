use Biblioteca;

Delimiter $$
create procedure Checar_Email(in email_param varchar(100))
BEGIN
	SELECT email FROM usuarios WHERE email = email_param;
END $$ 
Delimiter ;

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

