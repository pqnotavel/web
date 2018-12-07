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
	return $var;
}

if(isset($_POST['register'])){

	$username = mysqli_escape_string($db_link, $_POST['username']);

	//Teste se existe usuário
	$sql = "SELECT COUNT(*) AS my_bool FROM users WHERE username = '$username'";
	$result = mysqli_query($db_link, $sql);
	$user = mysqli_fetch_array($result);
	if($user['my_bool'])
	{	
		$_SESSION['mensagem'] = "Usuário já existe!";
		header('Location: ../cadastrar.php');
	}

	$name = mysqli_escape_string($db_link, $_POST['name']);
	$lastname = mysqli_escape_string($db_link, $_POST['lastname']);
	$password = mysqli_escape_string($db_link, $_POST['password']);
	$password = md5($password);
	$email = mysqli_escape_string($db_link, $_POST['email']);
	$phone = mysqli_escape_string($db_link, $_POST['phone']);
	$adm = 0;

	if(isset($_SESSION['adm']) AND $_SESSION['adm'] == 1){
		$admPassword = mysqli_escape_string($db_link, $_POST['admPassword']);
		$admPassword = md5($admPassword);

		$id = $_SESSION['user_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($db_link, $sql);
		$user = mysqli_fetch_array($result);
		if($admPassword != $user['password']){
			$_SESSION['mensagem'] = "Senha de Adminstrador Inválida!";
			// header('Location: ../cadastrar.php');
		}
		$adm = 1;
	}

	$sql = "INSERT INTO users (name, lastname, username, password, email, adm, phone) VALUES ('$name', '$lastname', '$username', '$password', '$email', '$adm', '$phone')";

	if(mysqli_query($db_link, $sql)){
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	}
	else{
		if(!isset($_SESSION['mensagem'])){
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../login.php');
		}
		header('Location: ../cadastrar.php');

	}
}