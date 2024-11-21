<?php
    include(dirname(__DIR__).'/login_fornecedor/protetion.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registrar</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/navbar.js"></script>
    <link rel="stylesheet" href="../../css/registrar.css">
</head>

<body>
    <div class="layout">
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
        <div class="page">
            <form method="post" action="../../php/produto/salvar.php" class="formRegistrar" enctype="multipart/form-data">
                <h1>Registrar produto</h1>
                <p>Digite os dados abaixo para registrar um produto.</p>

                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" accept="image/*" required>

                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o nome" autofocus="true" id="nome" name="nome" />

                <label for="categoria">Categoria</label>
                <select name="categoria">
                    <?php
                        $con = new mysqli("localhost", "root", "", "loja");

                        $res = $con->query("select * from categorias");

                        while ($linha = $res->fetch_object()){
                            $id = $linha->id;
                            $nome = $linha->nome;

                            echo "<option value='$id'>$nome</option>";
                        }

                        $con->close();
                    ?>
                </select>

                <label for="tamanho">Tamanho</label>
                <select name="tamanho">
                    <option value="P">P</option>
                    <option value="PP">PP</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                    <option value="GGG">GGG</option>
                </select>

                <label for="preco">Preço</label>
                <input type="number" placeholder="Digite o preco" name="preco" id="preco"/>
                
                <label for="quantidade">Quantidade</label>
                <input type="number" placeholder="Digite a quantidade" name="quantidade" id="quantidade"/>

                <label for="descricao">Descricão</label>
                <input type="text" placeholder="Informe a descricão" autofocus="true" id="descricao" name="descricao" />

                <input type="submit" value="Resgistrar produto" class="btn" />
            </form>
        </div>
    </div>
</body>

</html>