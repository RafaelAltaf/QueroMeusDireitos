<?php
    include_once("../model/usuarios.php");
    $u = new Usuarios();
    $u->SetEmail($_POST['email']);
    $u->SetSenha($_POST['senha']);
    $result = $u->Logar();
    if(!$result){
        session_start();
        header("location:../view/viewListaLivros.php");
    }
    else{
       header("location:../view/viewTelaDeMensagem.php?mensagem=$result");

    }
?>