<?php
$servername = "127.0.0.1:3306";
$database = "testemiguel";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Falha na conexao: " . mysqli_connect_error());
}

$sql = "CREATE TABLE if not exists NewsLetter ("
      . "id int NOT NULL AUTO_INCREMENT primary key,"
      . "email varchar(255) not null"
      . ");";

if (!mysqli_query($conn, $sql)) {
      die("Falha ao criar a tabela NewsLetter: " . $sql . "<br>" . mysqli_error($conn));
}

$sql = "CREATE TABLE if not exists NavbarMenus ("
      . "id int NOT NULL AUTO_INCREMENT primary key,"
      . "nome varchar(255) not null,"
      . "link varchar(500) not null"
      . ");";

if (!mysqli_query($conn, $sql)) {
      die("Falha ao criar a tabela NavbarMenus: " . $sql . "<br>" . mysqli_error($conn));
}

function criar_conta($conexao, $email) {
      $sql = "INSERT INTO NewsLetter (email) VALUES ('" . $email . "')";
      if (mysqli_query($conexao, $sql)) {
            echo "<script>"
                  . "alert('Email cadastrado com sucesso');"
                  . "window.location.href =" . "'http://localhost/4up/index.php';"
                  . "</script>";
      }
      else echo "Erro:" . mysqli_error($conexao);
}

function adicionar_item_menu($conexao, $nome, $link) {
      $sql = "INSERT INTO NavbarMenus (nome, link) VALUES ('". $nome. "', '" . $link . "')";
      if (mysqli_query($conexao, $sql)) {
            echo "<script>"
                  . "alert('Item adicionado com sucesso');"
                  . "window.location.href =" . "'http://localhost/4up/index.php';"
                  . "</script>";
      }
      else echo "Erro:" . mysqli_error($conexao);
}

function encerrar($conexao) {
      mysqli_close($conexao);
}


?>