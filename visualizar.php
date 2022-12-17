<?php

	require_once "conectar.php";

	$id = $_GET['id'];
	$comando = "SELECT * FROM dados WHERE id = '$id'";
	$resultado = mysqli_query(conn(), $comando);
	$variavel = mysqli_fetch_assoc($resultado);

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Perfil de <?=$variavel['nome']?></title>
</head>
<body>
	<div class="view">
		<a href="index.php">Voltar</a>
		<h2>Usuário:<br><?=$variavel['nome']?></h2>
		<p>Identificação:<br>N° <?=$variavel['id']?></p>
		<p>E-mail para contato:<br><?=$variavel['email']?></p>
	</div>
</body>
</html>