<?php
include(dirname(__DIR__).'/conexao.php');

if(isset($_POST["email"]) || isset($_POST["senha"])) {


    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $con->real_escape_string($_POST['email']);
        $senha = $con->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM fornecedores WHERE email = '$email' and senha = '$senha' LIMIT 1";
            $res = $con->query($sql_code) or die("Falha na execução do código SQL: " . $con->error);

            $qtd = $res->num_rows;

            if($qtd == 1) {

                $fornecedor = $res->fetch_assoc();

                if(password_verify($senha, $fornecedor['senha'])) {
                    session_start();
                }

                $_SESSION['id'] = $fornecedor['id'];

                header("Location: ../../html/tela_inicial_fornecedor.php");

            }else {
                echo "Falha ao logar!";
            }
        }
    
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset=utf-8>
        <title>Login</title>
        <link rel="stylesheet" href="../../css/login.css">
    </head>
    <body>
        <div class="topbar">    
            <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
        </div>

        <div class="page">
            <form method="post" action="" class="formLogin">
                <h1>Login</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>
                <label >E-mail</label>
                <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" />
                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="senha" id="senha" />
                <nav>
                <a href="#">Esqueci minha senha</a>
                <a href="../../html/entrar.html">Registrar</a>
                </nav>
                <input type="submit" value="Acessar" class="btn" />

            </form>
        </div>
        
    </body>
</html>

