<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["datanascimento"];
    $senha = $_POST["senha"];

    $con = new mysqli("localhost", "root", "", "loja");

    $con->query("UPDATE loja set nome = '$nome',set email = '$email',set nome = '$nome',set nome = '$nome'");

    $con->close();
?>