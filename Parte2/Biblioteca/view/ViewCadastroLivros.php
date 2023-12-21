<?php 
    session_start();
    if (empty($_SESSION['id_usuario'])) {
        header("location:../view/viewLoginUsuario");
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">   
<head>   
<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
<title>Biblioteca - Lista Livros</title>
</head>
<body>
    <header class="d-flex justify-content-center py-3 border-bottom border-dark">
        <ul class="nav nav-pills">
        <li class="nav-item"><a href="../view/viewCadastroLivros.php" class="nav-link">Cadastrar Livros</a></li>
        <li class="nav-item"><a href="../view/viewListaLivros.php" class="nav-link">Livros</a></li>
        <li class="nav-item"><a href="../view/viewListaLivros.php?lista=querLer" class="nav-link">Quero Ler</a></li>
        <li class="nav-item"><a href="../view/viewListaLivros.php?lista=lendo" class="nav-link">Estou Lendo</a></li>
        <li class="nav-item"><a href="../view/viewListaLivros.php?lista=lidos" class="nav-link">Já Lí</a></li>
        <li class="nav-item"><a href="../controller/logoff.php" class="nav-link">Sair</a></li>
        </ul>
    </header>
    <div class ="d-flex justify-content-center border border-secondary mx-auto mt-4" style="width: 30%; height:50%;">
        <form action="../controller/validaCadastroLivro.php" method = "POST">
        <h1 class="text-center mt-2">Cadastro de Livros</h1>
        <div class="form-group mt-2">
            <label>Título</label>
            <input name = "titulo" type="text" class="form-control"  placeholder="Digite o Título do Livro" required>
        </div>
        <div class="form-group mt-2">
            <label>Autor</label>
            <input name = "autor" type="text" class="form-control mt-2"  placeholder="Digite o Autor do Livro" required>
        </div>
        <div class="form-group mt-2">
            <label>Data de Publicação</label>
            <input name = "dataPublicacao" type="date" class="form-control mt-2" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3 mb-3">Cadastrar</button>
        </form>
    </div>
</body>