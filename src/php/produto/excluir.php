<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(!isset($_SESSION['nome'])) {
        print "<script>location.href='../login_fornecedor/tela_login.php';</script>";
    }
    
    $id =  $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');

    $con->query("delete from produtos where id =  $id");

    $con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/navbar.js" defer></script>
    <link rel="stylesheet" href="../../css/mensagem.css">
    <title>F&L Style</title>
</head>
<body>
    <div class="topbar">
        <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
        <span class="top1"></span>
        <div class="navegacao">
            <ul>
                <li class="lista ativado">
                    <a href="../produto/listagem.php">
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                        <span class="titulo">Voltar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="Meio">
        <div class="msg">
            <div class="choice">
                <h1>Produto Excluido</h1>
                <a href="../../php/produto/listagem.php">Conferir</a>
            </div>
        </div>
    </div>
</body>
</html>