<?php
    include_once("../model/usuarios.php");
    $u = new Usuarios();
    $u->SetEmail("rafael@gmail.com");
    $u->SetSenha("1234");
    if($u->Logar()){
        echo("Logou!");
    }
    else{
        echo("Email ou senha incorreto(s)");
    }
?>