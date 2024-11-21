<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');
    
    $dad = $con->query("select * from fornecedores where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;
        $email = $linha->email;
    }

    $con->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../css/editar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/navbar.js" defer></script>
</head>

<body>
<div class="topbar">
        <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
        <span class="top1"></span>
        <div class="navegacao">
            <ul>
                <li class="lista ativado">
                    <a href="../login_fornecedor/tela_login.php">
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                        <span class="titulo">Voltar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page">
        <form method="POST" action="../../php/fornecedor/alterar.php" class="formRegistrar">
            <input type="hidden" name="id" value="<?=$id?>" />
            <h1>Alterar Fornecedor</h1>
            <p>Digite os novos dados nos campos abaixo para alterar.</p>
            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite seu Nome" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" value="<?=$email?>" />

            <input type="submit" value="Criar uma conta" class="btn" />

        </form>
    </div>
</body>
</html>