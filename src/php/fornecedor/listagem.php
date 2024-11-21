<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/navbar.js" defer></script>
    <link rel="stylesheet" href="../../css/listagem.css">
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
        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include(dirname(__DIR__).'/conexao/conexao.php');
                    
                    $dad = $con->query("SELECT * FROM loja.fornecedores order by nome");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>" . $linha->email . "</td>\n";
                        echo "<td>\n";
                        echo "<a href='editar.php?id=$linha->id'>Editar</a>";
                        echo "<a href='excluir.php?id=$linha->id'>Excluir</a>";
                        echo "</td>\n";
                        echo "</tr>\n";
                    }

                    $con->close();
                ?>
            </tbody>
        </table>
    </div> 
</body>
</html>
<head>