<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(!isset($_SESSION['nome'])) {
        print "<script>location.href='../login_fornecedor/tela_login.php';</script>";
    }

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $tamanho = $_POST["tamanho"];
    $qtd = $_POST["quantidade"];
    $desc = $_POST["descricao"];
    $categoria = $_POST["categoria"];
        
    $con = new mysqli("localhost", "root", "", "loja");

    if(isset($_FILES["imagem"])){
        $imagem = $_FILES["imagem"];

        if($imagem["size"] > 3145728){
            die(include(dirname(__DIR__).'/mensagem_erro.html'));
        }

        $extensao = strtolower(substr($_FILES["imagem"]["name"], -4));
        $novo_nome = uniqid().$extensao;
        $pasta = "imagens/";
        $caminho = $pasta.$novo_nome;

        if($extensao != ".jpg" && $extensao != ".png"){
            include(dirname(__DIR__).'/mensagem_erro.html'); 
        }

        move_uploaded_file($_FILES["imagem"]["tmp_name"], $pasta.$novo_nome);
    }

    $con->query("insert into produtos(nome, preco, tamanho, 
    quantidade, descricao, imagem, caminho, categorias) values ('$nome','$preco','$tamanho','$qtd','$desc', '$novo_nome','$caminho', $categoria)");

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
    <link rel="stylesheet" href="">
    <title>F&L Style</title>
</head>
<body>
    <div class="topbar">
        <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
        <div class="top1">
        <span class="top1"></span>
        <div class="navegacao">
            <ul>
                <li class="lista ativado">
                    <a href="../produto/registrar_produto.php">
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
                <h1>Fornecedor Registrado</h1>
                <a href="../../php/produto/listagem.php">Conferir</a>
            </div>
        </div>
    </div>
</body>
</html>

