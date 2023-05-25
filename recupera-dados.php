<?php
    $nome = $_POST["nome"] ?? NULL;
    $idade = $_POST["idade"] ?? NULL;
    $email = $_POST["email"] ?? NULL;
    $hobbie = $_POST["hobbie"] ?? NULL;

    if ($idade < 18){
        echo "<script>alert('Acesso negado, você é menor de idade')</script>";
    }

    if (strlen($nome) < 6){
        echo "<script>alert('Nome precisa ter pelo menos 6 caracteres')</script>";
    }
?>