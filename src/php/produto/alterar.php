<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $tamanho = $_POST["tamanho"];
    $modelo = $_POST["modelo"];
    $qtd = $_POST["quantidade"];
    $desc = $_POST["descricao"];
    $categoria = $_POST["categoria"];

    include(dirname(__DIR__).'/conexao.php');
    
    $con->query("update produtos set nome = '$nome', preco = '$preco', tamanho = '$tamanho', modelo = '$modelo', quantidade = '$qtd', descricao = '$desc', categorias = '$categoria' where id = $id");

    $con->close();
?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Produto Alterado</h1>
            <a href="../../php/produto/listagem.php">Voltar</a>
        </div>
    </div>
</div>