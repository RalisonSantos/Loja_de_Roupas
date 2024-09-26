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
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include(dirname(__DIR__).'/conexao.php');

                    $dad = $con->query("SELECT * FROM loja.usuarios order by nome");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>" . $linha->email . "</td>\n";
                        echo "<td>" . $linha->data_nascimento . "</td>\n";
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

