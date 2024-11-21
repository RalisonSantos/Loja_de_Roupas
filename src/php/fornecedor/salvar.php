<?php

$con = new mysqli("localhost", "root", "", "loja");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

$res = $con->query("select email from fornecedores where email = '$email'");
$qtd = $res->num_rows;

if($qtd > 0){
    header("Location:../../html/registrar_forcedor.html");
    echo "<h1>Esse e-mail já foi usado para cadrastro! Por favor tente outro.</h1>";
}else{
    $con->query("insert into fornecedores(nome,email,senha) values ('$nome','$email','$senha_cripto')");
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
                <h1>Fornecedor Registrado</h1>
                <a href="../../php/fornecedor/listagem.php">Conferir</a>
            </div>
        </div>
    </div>
</body>
</html>

