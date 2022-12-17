<?php

	require_once "conectar.php";

	$id = $_GET['id'];
	$comando = "SELECT * FROM dados WHERE id = '$id'";
	$resultado = mysqli_query(conn(), $comando);
	$variavel = mysqli_fetch_assoc($resultado);

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$comando = "UPDATE dados SET nome = '$nome', email = '$email', senha ='$senha' WHERE id = '$id'";

		if (mysqli_query(conn(), $comando)) {
			header("Location: index.php");
		} else {
			die("Não foi possível editar seus dados. Erro: " + mysqli_error());
		}
	}

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Editar id: <?=$variavel['id']?></title>
</head>
<body>
	<form action="editar.php?id=<?=$variavel['id']?>" method="post">
		<h1>Editar Dados</h1>

		<input value="<?=$variavel['nome']?>" placeholder="Insira seu nome" type="text" name="nome" id="">
		<input value="<?=$variavel['email']?>" placeholder="Digite seu email" type="email" name="email" id="">
		<input value="" placeholder="Crie uma senha" type="password" name="senha" id="">

		<button type="submit">Alterar</button>
	</form>
</body>
</html>