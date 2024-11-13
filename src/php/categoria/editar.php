<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao.php');
    
    $dad = $con->query("select * from categorias where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;

    }

    $con->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../css/registrar.css">
</head>

<body>
    <div class="layout">
        <div class="topbar">
            <a href="../../index.html"><img src="../../imagens/logo.png" class="logo" /></a>
        </div>

        <div class="page">
            <form method="POST" action="../../php/categoria/alterar.php" class="formRegistrar">
            <input type="hidden" name="id" value="<?=$id?>" />
                <h1>Registrar</h1>
                <p>Digite o nome da categoria no campo abaixo.</p>

                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o Nome da categoria" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/><br>

                <input type="submit" value="Criar uma conta" class="btn" />

            </form>
        </div>
    </div>
</body>
</html>