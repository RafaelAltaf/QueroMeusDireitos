<?php
    include_once("../model/usuarios.php");
    
    $u = new Usuarios();
    $u->SetEmail($_POST['email']);
    $u->SetSenha($_POST['senha']);
    $u->SetNome($_POST['nome']);
    $result = $u->Cadastrar();

    if(!$result){
        session_start();
        header("location:../view/viewListaLivros.php");
    }
    else{
        header("location:../view/viewTelaDeMensagem.php?mensagem=$result");
    }
?>