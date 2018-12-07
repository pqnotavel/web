<?php
// Sessão
session_start();
// Conexão
require_once 'db.php';

if(isset($_POST['edit'])){
	$id = mysqli_escape_string($db_link, $_POST['id']);
	$description = mysqli_escape_string($db_link, $_POST['description']);
	$brand = mysqli_escape_string($db_link, $_POST['brand']);
	$info = mysqli_escape_string($db_link, $_POST['info']);
	$quantity = mysqli_escape_string($db_link, $_POST['quantity']);
	
	if(empty($_FILES['image'])){
		$sql = "UPDATE products SET description = '$description', brand = '$brand', info = '$info', quantity = '$quantity' WHERE id = '$id'";
	}
	else{
		$image = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($image));
		$sql = "UPDATE products SET description = '$description', brand = '$brand', info = '$info', quantity = '$quantity', image = '$image' WHERE id = '$id'";
	}


	if(mysqli_query($db_link, $sql)){
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../produtos.php');
	}	
	else{
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../produtos.php');
	}
}