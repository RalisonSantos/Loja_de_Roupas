<?php

include('../php/login_fornecedor/protetion.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="../css/entrar.css">
    <script src="../js/opcoes.js" defer></script>
</head>
<body>

    <div class="topbar">    
        <a href="../index.html" ><img src="../imagens/logo.png" class="logo"></a>
    </div> 

    <div class="Meio">
        <div class="alinhamento">
            <div class="choice01">
                <img src="../imagens/logo.png" id="img">
                <h3>Seja bem-vindo ao nosso site!</h3>
                <h3>Venha fazer parte do grupo F&L e confira todas as novidades.</h3>
                <a href="#" onclick="opcoes_usuario(),opcoes_fornecedor()">Resgistrar</a>
            </div>
        </div>

            <div class="usuario" id="usuario">
                <nav>
                    <h2>Usuário</h2>
                    <a href="../html/login.html">Login</a>
                    <a href="../html/registrar.html">Registrar</a>
                    <a href="../php/usuario/listagem.php">Contas</a>
                </nav>
            </div>

            <div class="fornecedor" id="fornecedor">
                <nav>
                    <h2>Fornecedor</h2>
                    <a href="../html/login.html">Login</a>
                    <a href="../html/registrar_forcedor.html">Registrar</a>
                    <a href="../php/fornecedor/listagem.php">Contas</a>
                </nav>
            </div>

            <a href="../php/login_fornecedor/logout.php">Sair</a>
    </div>
    
</body>
</html>