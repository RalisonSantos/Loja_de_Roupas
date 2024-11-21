<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');
    
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
            <form method="POST" action="../../php/categoria/alterar.php" class="formRegistrar">
            <input type="hidden" name="id" value="<?=$id?>" />
            <h1>Alterar Cadastro</h1>
            <p>Digite os novos dados nos campos abaixo para alterar.</p>
            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite o Nome da categoria" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/>
            <input type="submit" value="Criar uma conta" class="btn" />

            </form>
        </div>
    </div>
</body>
</html>