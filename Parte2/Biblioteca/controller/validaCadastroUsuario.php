<?php
    include_once("../model/usuarios.php");
    $u = new Usuarios();
    $u->SetEmail($_POST['email']);
    $u->SetSenha($_POST['senha']);
    $u->SetNome($_POST['nome']);
    
    if($u->Cadastrar()){
        session_start();
        header("location:../view/viewListaLivros.php");
    }
    else{
        header("location:../view/viewTelaDeMensagem.php?mensagem=Algo deu errado");
    }
?>