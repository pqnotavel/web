<?php
// Sessão
session_start();
// Conexão
require_once 'db.php';

if(isset($_POST['delete'])){
	
	$id = mysqli_escape_string($db_link, $_POST['id']);

	$sql = "DELETE FROM products WHERE id = '$id'";

	if(mysqli_query($db_link, $sql)){
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../produtos.php');
	}	
	else{
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../produtos.php');
	}
}