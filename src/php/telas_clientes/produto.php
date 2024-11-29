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