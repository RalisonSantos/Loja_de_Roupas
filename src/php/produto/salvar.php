<?php

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $tamanho = $_POST["tamanho"];
    $modelo = $_POST["modelo"];
    $qtd = $_POST["quantidade"];
    $desc = $_POST["descricao"];
    $categoria = $_POST["categoria"];

        
    $con = new mysqli("localhost", "root", "", "loja");

    $con->query("insert into produtos(nome, preco, tamanho, modelo, 
    quantidade, descricao, categorias) values ('$nome','$preco','$tamanho','$modelo','$qtd','$desc', $categoria)");

    $con->close();

 ?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Produto Registrado</h1>
            <a href="../../php/produto/listagem.php">Conferir</a>
        </div>
    </div>
</div>

