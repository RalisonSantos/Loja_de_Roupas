<head>
<link rel="stylesheet" href="../../css/listagem.css"> 
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
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include(dirname(__DIR__).'/conexao/conexao.php');

                    $dad = $con->query("SELECT * FROM loja.categorias order by nome");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>\n";
                        echo "<img height='100' width='100' src='$linha->caminho' >";
                        echo "</td>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
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

