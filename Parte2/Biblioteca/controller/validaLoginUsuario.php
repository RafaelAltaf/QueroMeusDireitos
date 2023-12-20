<?php
    include_once("../model/usuarios.php");
    $u = new Usuarios();
    $u->SetEmail($_POST['email']);
    $u->SetSenha($_POST['senha']);
    
    if($u->Logar()){
        session_start();
        header("location:../view/viewListaLivros.php");
    }
    else{
       header("location:../view/viewTelaDeMensagem.php?mensagem=Email e/ou senha inválido(s)");

    }
?>