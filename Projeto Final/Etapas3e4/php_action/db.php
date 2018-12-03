<?php
	//[mysql]
	$db_name = "casa_do_agricultor";//nome do banco de dados
	$db_user = "root";//usuario do banco de dados
	$db_pass = "";//senha do usuario
	$db_host = "localhost";//nome do servidor/host
	$db_error = false;//indicador de erros no banco de dados
	$db_server_link = false;//indicador de conexao  com o servidor
	$db_link = false;//indicador de conexao com o banco de dados

	//[conexoes]
	ini_set('default_charset',"UTF-8");//altera o padrao de caracteres do php para utf8 (o default é ISO-8859-1);
	//$db_link=@mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	$db_link=@mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($db_link, $db_name);
	if(!$db_link) {
		$db_error="Não foi possível  conectar-se ao servidor do banco de dados.<br>".mysqli_connect_error();
		die("Erro: ".$db_error);
		exit;
	}
	mysqli_set_charset($db_link,'utf8'); //altera o padrao de caracteres php-mysql para utf8
?>