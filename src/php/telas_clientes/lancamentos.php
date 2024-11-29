<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>S&L-Style</title>
    <style> @import url(../../css/lancamentos.css); </style>
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
                    <a href="../../index.html">
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
             
                $dad = $con->query("select p.*,c.nome as nome_categoria from produtos as p inner join 
                categorias as c on p.categorias = c.id order by id");
                while ($linha = $dad->fetch_object()){
                    echo "<div class='product-item'>";
                    echo "<img src='../../php/produto/$linha->caminho'>";
                    echo "<h1>" . $linha->nome . "</h1>";
                    echo "<h1> R$ $linha->preco</h1>";
                    echo "<a href='../telas_clientes/produto.php?id=$linha->id'>";
                    echo "Comprar";
                    echo "</a>";
                    echo "</div>";

                }
                $con->close();
            ?>
        </section>
    </main>

</body>

</html>