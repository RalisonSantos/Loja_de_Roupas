<?php
    include(dirname(__DIR__).'/login_fornecedor/protetion.php');
?>
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
                    <a href="../fornecedor/tela_inicial_fornecedor.php">
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
                    <th>Preview</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Tamanho</th>
                    <th>Preco</th>
                    <th>Quantidade</th>
                    <th>Descrição</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include(dirname(__DIR__).'/conexao/conexao.php');
                 

                    $dad = $con->query("select p.*,c.nome as nome_categoria from produtos as p inner join 
                    categorias as c on p.categorias = c.id order by descricao");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>";
                        echo "<img height='100' width='100' src='$linha->caminho' >";
                        echo "</td>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>";
                        echo "<a href='../categoria/editar.php?id=$linha->categorias'>";
                        echo $linha->nome_categoria;
                        echo "</a>";
                        echo "</td>\n";
                        echo "<td>" . $linha->tamanho . "</td>\n";
                        echo "<td>" . $linha->preco . "</td>\n";
                        echo "<td>" . $linha->quantidade . "</td>\n";
                        echo "<td>" . $linha->descricao . "</td>\n";

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


