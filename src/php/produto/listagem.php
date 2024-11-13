<head>
<link rel="stylesheet" href="../../css/listagem.css"> 
</head>
<body>
    <div class="topbar">    
            <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
    </div>

    <div class="Meio">
        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Modelo</th>
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

                    include(dirname(__DIR__).'/conexao.php');

                    $dad = $con->query("select p.*,c.nome as nome_categoria from produtos as p inner join 
                    categorias as c on p.categorias = c.id order by descricao");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>" . $linha->modelo . "</td>\n";
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


