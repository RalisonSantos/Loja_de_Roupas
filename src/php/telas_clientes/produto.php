<?php
    $id = $_GET["id"];
    
    include(dirname(__DIR__)."/conexao/conexao.php");

    $res = $con->query("select * from produtos where id = '$id'");
    if($linha = $res->fetch_object()){
        
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
    <title>S&L-Style</title>
    <style> @import url(../../css/produto.css); </style>
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
                    <a href="../telas_clientes/lancamentos.php">
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                        <span class="titulo">Voltar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <main>
        <section class="products">
            <?php
                $con = new mysqli("localhost", "root", "", "loja");
                    echo "<div class='product-img'>";
                    echo "<img src='../../php/produto/$linha->caminho'>";
                    echo "</div>";

                    echo "<div class='product-item'>";
                    echo "<h2>" . $linha->nome."</h2>";
                    echo "<h1> R$ $linha->preco no Pix 19% off</h1>";
                    echo "<a href='../telas_clientes/produto.php?id=$linha->id'>";
                    echo "Comprar";
                    echo "</a>";
                    echo "<a href='#' class='ad_carrin'>";
                    echo "Adicionar ao carrinho";
                    echo "</a>";
                    echo "</div>";
                
                $con->close();
            ?>
        </section>
    </main>
</body>
</html>


