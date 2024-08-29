<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$con = new mysqli("localhost", "root", "", "loja");

$con->query("insert into usuarios(email,senha) values ('$email','$senha');");

$con->close();

echo "Usuario Cadastrado!"  

 ?>