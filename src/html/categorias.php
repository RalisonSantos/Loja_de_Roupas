<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>S&L-Style</title>
    <link rel="stylesheet" href="../css/categorias.css">
</head>
<body>
<div class="topbar">
        <a href="../index.html"><img src="../imagens/logo3.png" class="iclogo"/></a>
        <span class="top1"></span>
        <div class="navegacao">
            <ul>
                <li class="lista ativado">
                    <a href="../index.html">
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
             
                $dad = $con->query("SELECT * FROM loja.categorias order by nome");
                while ($linha = $dad->fetch_object()){
                    echo "<div class='product-item'>";
                    echo "<img src='../php/categoria/$linha->caminho'>";
                    echo "<h1>" . $linha->nome . "</h1>";
                    echo "<a href='#'>";
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

