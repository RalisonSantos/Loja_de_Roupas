<?php

    $nome = $_POST["nome"];

    include(dirname(__DIR__).'/conexao/conexao.php');

    if(isset($_FILES["imagem"])){
        $imagem = $_FILES["imagem"];

        if($imagem["size"] > 3145728){
            die(include(dirname(__DIR__).'/mensagem_erro.html'));
        }

        $extensao = strtolower(substr($_FILES["imagem"]["name"], -5));
        $novo_nome = uniqid().$extensao;
        $pasta = "imagens/";
        $caminho = $pasta.$novo_nome;

        if($extensao != ".jpg" && $extensao != ".png" && $extensao != ".jpeg"){
           echo "erro";
        }

        move_uploaded_file($_FILES["imagem"]["tmp_name"], $pasta.$novo_nome);
    }

    $con->query("insert into categorias(nome,imagem, caminho) values ('$nome', '$novo_nome','$caminho')");

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
                    <a href="../login_fornecedor/tela_login.php">
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
                <h1>Categoria Registrado</h1>
                <a href="../../php/categoria/listagem.php">Conferir</a>
            </div>
        </div>
    </div>
</body>
</html>



