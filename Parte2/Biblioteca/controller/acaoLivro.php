<?php
    include_once("../model/livros.php");
    session_start();
    if (empty($_SESSION['id_usuario'])) {
        header("location:../view/viewLoginUsuario");
    }

    
    switch($_GET['acao']){
        case "querLer":
        case "lidos": 
        case "lendo":
            echo "ta aqui";
            $l = new Livros();
            if(!empty($_GET['id_livro'])){
                $l->SetId($_GET['id_livro']);
                $result = $l->AdicionarLivro($_GET['acao'], $_SESSION['id_usuario']);
                if(!$result){
                    header("location:../view/viewListaLivros.php?lista=".$_GET['acao']);
                }
                else{
                    header("location:../view/viewTelaDeMensagem.php?mensagem=$result");
                }
            }
            else{
                header("location:../view/viewListaLivros.php");
            }
            break;

        case "deletar":
            $l = new Livros();
            if(!empty($_GET['id_livro'])){
                $l->SetId($_GET['id_livro']);
                $result = $l->DeletarLivro();
                if(!$result){
                    header("location:../view/viewListaLivros.php");
                }
                else{
                    header("location:../view/viewTelaDeMensagem.php?mensagem=$result");
                }     
            }
            else{
                header("location:../view/viewListaLivros.php");
            }
            break;
        case "remover":
            echo "ta aqui";
            $l = new Livros();
            $l->SetId($_GET['id_livro']);
            $result = $l->RemoverLivro($_GET['lista']);
            if(!$result){
                header("location:../view/viewListaLivros.php?lista=".$_GET['lista']);
            }
            else{
                header("location:../view/viewTelaDeMensagem.php?mensagem=$result");
            }
            break;
        case true || false || NULL:
            //header("location:../view/viewListaLivros.php");
            break;     
    }
?>