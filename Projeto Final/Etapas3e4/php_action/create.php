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

	// if(getimagesize($_FILES['image']['tmp_name'] == FALSE)){
	// 	$_SESSION['mensagem'] = "Insira uma imagem!";
	// 	header('Location: ../adicionar.php');
	// }
	// else{
		$description = clear($_POST['description']);
		$brand = clear($_POST['brand']);
		$info = clear($_POST['info']);
		$image = mysqli_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
		$image = addslashes(file_get_contents($image));
		$image = base64_encode($image);

		// $image = addslashes($_FILES['image']['tmp_name']);
		// $image = file_get_contents($image);

		$sql = "INSERT INTO products (description, brand, info, image) VALUES ('$description', '$brand', '$info', '$image')";

		if(mysqli_query($db_link, $sql)){
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		}
		else{
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		}
	// }	
}