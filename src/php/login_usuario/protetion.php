<?php

if(!isset($_SESSION)) {
    session_start();
}



if(!isset($_SESSION['nome'])) {
    print "<script>location.href='../login_fornecedor/tela_login.php';</script>";
}

?>