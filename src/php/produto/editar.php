<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(!isset($_SESSION['nome'])) {
        print "<script>location.href='../login_fornecedor/tela_login.php';</script>";
    }
    $id = $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');
    
    $dad = $con->query("select * from produtos where id = $id");

    if($linha = $dad->fetch_object()){

        $id = $linha->id;
        $nome = $linha->nome;
        $preco = $linha->preco;
        $tamanho = $linha->tamanho;
        $qtd = $linha->quantidade;
        $desc = $linha->descricao;
        $categoria = $linha->categorias;
        $imagem = $linha->caminho;
    }

    $con->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="../../css/editar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/navbar.js" defer></script>
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
        <div class="page">
            <form method="post" action="../produto/alterar.php" class="formRegistrar">
                <input type="hidden" name="id" value="<?=$id?>" />
            
                <h1>Alterar Produto</h1>
                <p>Digite os novos dados nos campos abaixo para alterar.</p>
                


                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o nome" autofocus="true" id="nome" name="nome" value="<?=$nome?>"/>

                <label for="categoria">Categoria</label>
                <select name="categoria">
                    <?php
                        include(dirname(__DIR__).'/conexao/conexao.php');

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
                <select name="tamanho">
                    <?php
                    $id = $_GET["id"];
                    $con = new mysqli("localhost", "root", "", "loja");

                    $res = $con->query("select * from produtos where id = $id");
                    while ($linha = $res->fetch_object()){
                        
                        $sem_valor = " ";
                        $tamanho = $linha->tamanho;

                        if($tamanho != $sem_valor){
                            echo "<option value='$tamanho' selected>$tamanho</option>";
                            echo "<option value='P'>P</option>"; 
                            echo "<option value='PP'>PP</option>";
                            echo "<option value='M'>M</option>";
                            echo "<option value='G'>G</option>";
                            echo "<option value='GG'>GG</option>";
                            echo "<option value='GGG'>GGG</option>";
                        }
                        
                    }
                    ?>
                </select>
                <label for="preco">Preco</label>
                <input type="number" placeholder="Digite o preco" name="preco" id="preco" value="<?=$preco?>"/>
               
                <label for="quantidade">Quantidade</label>
                <input type="number" placeholder="Digite a quantidade" name="quantidade" id="quantidade" value="<?=$qtd?>"/>

                <label for="descricao">Descricão</label>
                <input type="text" placeholder="Informe a descricão" autofocus="true" id="descricao" name="descricao" value="<?=$desc?>"/>

                <input type="submit" value="Resgistrar produto" class="btn" />

            </form>
        </div>
   
</body>

</html>