<?php
include_once 'bancodedados.php';

// $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

if(/* is_null($nome) || */ is_null($email)) {
    echo echo "<script>"
    . "alert('Eroo: Email não pode ser nulo');"
    . "window.location.href =" . "'http://localhost/4up/index.php';"
    . "</script>";
    return;
}

criar_conta($conn,/*  $nome, */ $email);
encerrar($conn);