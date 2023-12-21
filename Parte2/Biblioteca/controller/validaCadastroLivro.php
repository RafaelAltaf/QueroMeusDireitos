<?php
    session_start();
    if (empty($_SESSION['id_usuario'])) {
        header("location:../view/viewLoginUsuario");
    }

    include_once("../model/livros.php");
    $l = new Livros();
    $l->SetTitulo($_POST['titulo']);
    $l->SetAutor($_POST['autor']);
    $l->SetDataPublicacao($_POST['dataPublicacao']);
    $result = $l->CadastrarLivro();
    if(!$result){
        header("location:../view/viewListaLivros.php");
    }
    else{
        header("location:../view/viewTelaDeMensagem.php?mensagem=$result");
    }
    
    
?>