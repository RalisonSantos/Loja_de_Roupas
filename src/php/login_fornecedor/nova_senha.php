<?php

$email = $_GET["email"];

include(dirname(__DIR__).'/conexao/conexao.php');

$dados = $con->query("select * from fornecedores where email = '$email'");
if($linha2 = $dados->fetch_object()){
   $id = $linha2->id;
}

echo $email;

$con->close();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Esqueceu senha</title>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="../../js/navbar.js" defer></script>
        <link rel="stylesheet" href="../../css/registrar_fornecedor.css">
    </head>
    
    <body>
        <div class="layout">
            <div class="topbar">
                <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
                <span class="top1"></span>
                <div class="navegacao">
                    <ul>
                        <li class="lista ativado">
                            <a href="../php/login_fornecedor/tela_login.php">
                                <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                                <span class="titulo">Voltar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page">
                <form method="POST" action="../login_fornecedor/alterar_senha.php" class="formRegistrar">
                    <input type="hidden" name="id" value="<?=$id?>" />
                    <p>Digite sua nova senha no campo abaixo.</p>

                    <label for="senha">Senha</label>
                    <input type="password" placeholder="Digite sua nova senha" autofocus="true" name="senha" />
    
                    <input type="submit" value="Continuar" class="btn" />
    
                </form>
            </div>
        </div>
    </body>
</html>