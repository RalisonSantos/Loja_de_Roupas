<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    include(dirname(__DIR__).'/conexao/conexao.php');

    $res = $con->query("select email from usuarios where email = '$email'");
    $qtd = $res->num_rows;

    if($qtd > 0){
        header("Location:../../html/registrar_usuario.html");
    }else{
        $con->query("insert into loja.usuarios(nome,email,data_nascimento,senha) values ('$nome','$email','$data','$senha')");
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
                    <a href="../login_usuario/tela_login.php">
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
                <h1>Usuário Registrado</h1>
                <a href="../../php/usuario/listagem.php">Conferir</a>
            </div>
        </div>
    </div>
</body>
</html>



