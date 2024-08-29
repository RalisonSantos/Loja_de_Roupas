<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$con = new mysqli("localhost", "root", "", "loja");

$res = $con->query("SELECT * FROM loja.usuarios");




 ?>