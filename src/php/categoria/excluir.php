<?php
    $id =  $_GET["id"];

    include(dirname(__DIR__).'/conexao.php');

    $con->query("delete from categorias where id =  $id");

    $con->close();

?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Categoria Excluida</h1>
            <a href="../../php/categoria/listagem.php">Conferir</a>
        </div>
    </div>
</div>