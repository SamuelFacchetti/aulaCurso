<?php require "conectar.php";?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Meu Primeiro Site!</title>
</head>
<body>
	<form action="adicionar.php" method="post">
		<h1>Cadastro</h1>

		<input placeholder="Insira seu nome" type="text" name="nome" id="">
		<input placeholder="Digite seu email" type="email" name="email" id="">
		<input placeholder="Crie uma senha" type="password" name="senha" id="">

		<button type="submit">Cadastrar</button>
	</form>

	<?php if(!empty($dados = listar())):?>
	<div class="conteudo">
		<?php
			foreach ($dados as $dado):?>
				<p>
					<?=$dado['nome']?>

					<a href="visualizar.php?id=<?=$dado['id']?>">
						<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
							<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
							<circle cx="12" cy="12" r="3"></circle>
						</svg>
					</a>
					<a href="editar.php?id=<?=$dado['id']?>">
						<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
							<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
						</svg>
					</a>
					<a href="deletar.php?id=<?=$dado['id']?>">
						<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
							<polyline points="3 6 5 6 21 6"></polyline>
							<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
						</svg>
					</a>
				</p>
		<?php
			endforeach;
		?>
	</div>
	<?php endif;?>
</body>
</html>