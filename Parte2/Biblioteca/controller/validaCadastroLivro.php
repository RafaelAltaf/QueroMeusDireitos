<?php
    include_once("../model/livros.php");
    $l = new Livros();
    $l->SetTitulo("Metamorfose");
    $l->SetAutor("Franz Kafka");
    $l->SetDataPublicacao("2005-12-16");
    $l->CadastrarLivro();
?>