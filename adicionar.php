<?php

require "conectar.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$comando = "INSERT INTO dados(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query(conn(), $comando)) {
    header("Location: index.php");
} else {
    die("Não foi possível cadastrar no banco. " + mysqli_error());
}

