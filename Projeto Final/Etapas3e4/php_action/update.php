<?php
// Sessão
session_start();
// Conexão
require_once 'db.php';

if(isset($_POST['edit'])){
	$description = mysqli_escape_string($db_link, $_POST['description']);
	$brand = mysqli_escape_string($db_link, $_POST['brand']);
	$info = mysqli_escape_string($db_link, $_POST['info']);
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
	$image_name = addslashes($_FILES['image']['name']);

	$id = mysqli_escape_string($db_link, $_POST['id']);

	$sql = "UPDATE products SET description = '$description', brand = '$brand', info = '$info' WHERE id = '$id'";

	if(mysqli_query($db_link, $sql)){
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../produtos.php');
	}	
	else{
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../produtos.php');
	}
}