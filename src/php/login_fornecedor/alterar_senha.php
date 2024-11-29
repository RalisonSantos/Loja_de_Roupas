<?php

$senha = $_POST["senha"];
$id = $_POST["id"];

include(dirname(__DIR__).'/conexao/conexao.php');

echo $id;
//$con->query("update fornecedores set senha = '$senha' where id = '$id'")

$con->close();
?>

