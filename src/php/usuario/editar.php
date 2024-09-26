<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao.php');
    
    $dad = $con->query("select * from usuarios where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;
        $email = $linha->email;
        $data = $linha-> data_nascimento;
        $senha = $linha-> senha;
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
    <div class="topbar">
        <a href="../../index.html"><img src="../../imagens/logo.png" class="logo" /></a>
    </div>

    <div class="page">
        <form method="POST" action="../../php/usuario/alterar.php" class="formRegistrar">
            <input type="hidden" name="id" value="<?=$id?>" />
            <h1>Registrar</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>

            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite seu Nome" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/><br>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" value="<?=$email?>" />

            <label for="senha">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" id="senha" value="<?=$senha?>"/>

            <label for="data">Data de Nascimento</label>
            <input type="date" placeholder="Data de Nascimento" autofocus="true" id="data" name="data" value="<?=$data?>" />

            <input type="submit" value="Criar uma conta" class="btn" />

        </form>
    </div>
</body>
</html>