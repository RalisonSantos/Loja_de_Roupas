<?php
    include(dirname(__DIR__).'/login_fornecedor/protetion.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>F&L-Style</title>
    <link rel="stylesheet" href="../../css/tela_inicial_fornecedor.css">
    <script src="../../js/navbar.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div class="layout">
        <div class="topbar">
            <a href="../../index.html"><img src="../../imagens/logo3.png" class="iclogo"/></a>
            <div class="top1">
                <nav>
                    <a href="../../html/lancamentos.html">ERROR</a>
                    <a href="../../html/categorias.html">ERROR</a>
                    <a href="../login_fornecedor/logout.php">sair</a>
                </nav>
            </div>
            <div class="navegacao">
                <ul>
                    <li class="lista ativado">
                        <a href="#">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="titulo">Home</span>
                        </a>
                    </li>
                    <li class="lista">
                        <a href="../produto/registrar_produto.php">
                            <span class="icon"><ion-icon name="bag-handle-outline"></ion-icon></span>
                            <span class="titulo">Registrar Produto</span>
                        </a>
                    </li>
                    <li class="lista">
                        <a href="../produto/listagem.php">
                            <span class="icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                            <span class="titulo">Lista de Produtos</span>
                        </a>
                    </li>
                    <li class="lista">
                        <a href="#">
                            <span class="icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                            <span class="titulo">Produtos vendidos</span>
                        </a>
                    </li>
                    <li class="lista">
                        <a href="../../html/registrar_categoria.html">
                            <span class="icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                            <span class="titulo">Registrar Categoria</span>
                        </a>
                    </li>
                    <li class="lista">
                        <a href="../categoria/listagem.php">
                            <span class="icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                            <span class="titulo">Lista de Categorias</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="meio">
        
        </div>
    </div>

</body>

</html>
