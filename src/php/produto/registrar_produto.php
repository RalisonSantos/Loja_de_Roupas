<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../css/registrar.css">
</head>

<body>
    <div class="layout">
        <div class="topbar">
            <a href="../../index.html"><img src="../../imagens/logo.png" class="logo" /></a>
        </div>

        <div class="page">
            <form method="post" action="../../php/produto/salvar.php" class="formRegistrar">
            
                <h1>Registrar</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>

                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o nome" autofocus="true" id="nome" name="nome" /><br>

                <label for="modelo">Modelo</label>
                <input type="text" placeholder="Digite o modelo" autofocus="true" id="modelo" name="modelo" />

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

                <label for="cor">Cor</label>

                <label for="tamanho">Tamanho</label>
                <input type="text" placeholder="Digite o tamanho" name="tamanho" id="tamanho" maxlength="3" />

                <label for="preco">Preco</label>
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