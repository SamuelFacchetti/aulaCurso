<?php

function conn() {
	$conn = mysqli_connect("localhost", "root", "", "banco");

	return $conn;
}

function listar() {
	$sql = "SELECT * FROM dados";
	$resul = mysqli_query(conn(), $sql);
	$data = array();
	while ($linha_tabela = mysqli_fetch_assoc($resul)){
		$data[]= $linha_tabela;
	}
	return $data;
}