<?php
// Sessão
session_start();
// Conexão
require_once 'db.php';
// Clear
function clear($input) {
	global $db_link;
	// sql
	$var = mysqli_escape_string($db_link, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['add'])){
	$description = clear($_POST['description']);
	$brand = clear($_POST['brand']);
	$info = clear($_POST['info']);
	$quantity = clear($_POST['quantity']);
	$image = $_FILES['image']['tmp_name'];
	$image = addslashes(file_get_contents($image));

	$sql = "INSERT INTO products (description, brand, info, quantity, image) VALUES ('$description', '$brand', '$info', '$quantity', '$image')";

	if(mysqli_query($db_link, $sql)){
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../produtos.php');
	}
	else{
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../produtos.php');
	}
}