<?php

require_once "conectar.php";

$id = $_GET['id'];

$comando = "DELETE FROM dados WHERE id = '$id'";

if (mysqli_query(conn(), $comando)) {
	header("Location: index.php");
} else {
	die("Não foi possível deletar. Erro: " + mysqli_error());
}
