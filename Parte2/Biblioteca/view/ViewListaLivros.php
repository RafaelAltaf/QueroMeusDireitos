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
<title>Aula PHP - Revisão</title>
</head>
<body>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Número</th>
        <th scope="col">Título</th>
        <th scope="col">Autor</th>
        <th scope="col">Data de Publicação</th>
        </tr>
    </thead>
    <tbody class = "table-group-divider">
        <?php
            include_once("../model/livros.php");
            $l = new Livros();
            $l->ListarLivros();
        ?>
    </tbody>
    </table>
</body>