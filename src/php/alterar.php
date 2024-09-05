<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];

    $con = new mysqli("localhost", "root", "", "loja");

    $con->query("update loja.usuarios set nome = '$nome', email = '$email', data_nascimento = '$data', senha = '$senha' where id = $id");

    $con->close();

    echo "alterado com sucesso!";
?>