<?php
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao.php');
    
    $dad = $con->query("select * from produtos where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;
        $preco = $linha->preco;
        $tamanho = $linha->tamanho;
        $modelo = $linha->modelo;
        $qtd = $linha->quantidade;
        $desc = $linha->descricao;
        $categoria = $linha->categorias;
    }

    $con->close();
?>
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
            <form method="post" action="../produto/alterar.php" class="formRegistrar">
                <input type="hidden" name="id" value="<?=$id?>" />
            
                <h1>Registrar</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>

                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o nome" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/><br>

                <label for="modelo">Modelo</label>
                <input type="text" placeholder="Digite o modelo" autofocus="true" id="modelo" name="modelo" value="<?=$modelo?>"/>

                <label for="categoria">Categoria</label>
                <select name="categoria">
                    <?php
                        $con = new mysqli("localhost", "root", "", "loja");

                        $res = $con->query("select * from categorias");

                        while ($linha = $res->fetch_object()){
                            $id = $linha->id;
                            $nome = $linha->nome;

                            if($id == $categoria){
                                echo "<option value='$id' selected>$nome</option>";
                            }
                            else{
                                echo "<option value='$id'>$nome</option>";
                            }
                            
                        }

                        $con->close();
                    ?>
                </select>

                <label for="tamanho">Tamanho</label>
                <input type="text" placeholder="Digite o tamanho" name="tamanho" id="tamanho" value="<?=$tamanho?>"/>

                <label for="preco">Preco</label>
                <input type="number" placeholder="Digite o preco" name="preco" id="preco" value="<?=$preco?>"/>
                
                <label for="quantidade">Quantidade</label>
                <input type="number" placeholder="Digite a quantidade" name="quantidade" id="quantidade" value="<?=$qtd?>"/>

                <label for="descricao">Descricão</label>
                <input type="text" placeholder="Informe a descricão" autofocus="true" id="descricao" name="descricao" value="<?=$desc?>"/>

                <input type="submit" value="Resgistrar produto" class="btn" />

            </form>
        </div>
    </div>
</body>

</html>