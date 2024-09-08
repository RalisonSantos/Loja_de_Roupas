<head>
<link rel="stylesheet" href="../css/listagem.css"> 
</head>
<body>
    <div class="layout"></div>
    <div class="topbar">    
            <a href="../html/index.html" ><img src="../imagens/logo.png" class="logo"></a>
    </div>

    <div class="Meio">
        <h1>Usuários Logados</h1>
        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Senha</th>
                    <th>Opções</th>
                    <th><a href="../html/entrar.html">Voltar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = new mysqli("localhost", "root", "", "loja");

                    $dad = $con->query("SELECT * FROM loja.usuarios order by nome");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>" . $linha->email . "</td>\n";
                        echo "<td>" . $linha->data_nascimento . "</td>\n";
                        echo "<td>" . $linha->senha . "</td>\n";
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

