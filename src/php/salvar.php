<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$data = $_POST["datanascimento"];
$senha = $_POST["senha"];

$con = new mysqli("localhost", "root", "", "loja");

$con->query("insert into usuarios(nome,email,data_nascimento,senha) values ('$nome','$email','$data','$senha');");

$con->close();

echo "usuario criado como sucessso";


 ?>

