<?php
    $id =  $_GET["id"];

    $con = new mysqli("localhost", "root", "", "loja");

    $con->query("delete from usuarios where id =  $id");

    $con->close();

?>

<link rel="stylesheet" href="../css/mensagem.css">
<div class="layout"></div>
<div class="topbar">    
        <a href="../html/index.html" ><img src="../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Usuário Excluido</h1>
            <a href="../php/listagem.php">Voltar</a>
        </div>
    </div>
</div>