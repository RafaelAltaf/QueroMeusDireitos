<?php
    include_once("../model/usuarios.php");
    $u = new Usuarios();
    $u->SetEmail("rafael@gmail.com");
    $u->SetSenha("1234");
    $u->SetNome("Rafael");
    $u->Cadastrar();
?>