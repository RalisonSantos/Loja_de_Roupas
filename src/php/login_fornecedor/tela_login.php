<?php
    include(dirname(__DIR__).'/conexao/conexao.php');

    $dad = $con->query("select * from fornecedores where id");

    if($linhaa = $dad->fetch_object()){

        $id = $linhaa->id;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="../../css/login.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="../../js/navbar.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <div class="layout">
            <div class="topbar">
                <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
                <span class="top1"></span>
                <div class="navegacao">
                    <ul>
                        <li class="lista ativado">
                            <a href="../../index.html">
                                <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                                <span class="titulo">Voltar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page">
                <form method="POST" action="login.php" class="formLogin">
                <input type="hidden" name="id" value="<?=$id?>" />
                    <h1>Login</h1>
                    <p>Digite os seus dados de acesso no campo abaixo.</p>
                    <label for="nome">Usuário</label>
                    <input type="text" placeholder="Digite seu nome" name="nome" required/>
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Digite seu e-mail" name="email" required/>
                    <label for="password">Senha</label>
                    <input type="password" placeholder="Digite sua senha" name="senha" required/>
                    <nav>
                    <a href="../../html/esqueceu_senha_fornecedor.html">Esqueci minha senha</a>
                    <a href="../../html/registrar_forcedor.html">Registrar</a>
                    </nav>
                    <input type="submit" value="Acessar" class="btn" />

                </form>
            </div>
        </div>
    </body>
</html>

