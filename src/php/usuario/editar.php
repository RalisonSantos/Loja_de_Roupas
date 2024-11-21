<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');
    
    $dad = $con->query("select * from usuarios where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;
        $email = $linha->email;
        $data = $linha-> data_nascimento;
    }

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/navbar.js" defer></script>
    <link rel="stylesheet" href="../../css/editar.css">
    <title>F&L Style</title>
</head>
<body>
    <div class="topbar">
        <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
        <span class="top1"></span>
        <div class="navegacao">
            <ul>
                <li class="lista ativado">
                    <a href="../login_usuario/tela_login.php">
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                        <span class="titulo">Voltar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page">
        <form method="POST" action="../../php/usuario/alterar.php" class="formRegistrar">
            <input type="hidden" name="id" value="<?=$id?>" />
            <h1>Alterar Usuário</h1>
            <p>Digite os novos dados nos campos abaixo para alterar.</p>
            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite seu Nome" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" value="<?=$email?>" />

            <label for="data">Data de Nascimento</label>
            <input type="date" placeholder="Data de Nascimento" autofocus="true" id="data" name="data" value="<?=$data?>" />

            <input type="submit" value="Criar uma conta" class="btn" />

        </form>
    </div>
</body>
</html>