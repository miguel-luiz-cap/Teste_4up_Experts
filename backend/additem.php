<?php
include_once 'bancodedados.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$link = isset($_POST['link']) ? $_POST['link'] : null;

if(is_null($nome) || is_null($link)) {
    echo "<script>"
    . "alert('Nome/Link não pode ser nulo');"
    . "window.location.href =" . "'http://localhost/4up/cadastro.php';"
    . "</script>";
    return;
}

adicionar_item_menu($conn, $nome, $link);
encerrar($conn);