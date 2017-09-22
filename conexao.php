<?php
	$hostname_config = "sql10.freemysqlhosting.net";
	$database_config = "sql10192258";
	$username_config = "sql10192258";
	$password_config = "Zmk31LNTep";


	$conexao = mysqli_connect("$hostname_config","$username_config","$password_config","$database_config")
				or die (mysqli_error());
	//quando subir, trocar o localhost pelo endereço do servidor
	//root é o usuário, quando subir, alterar pelo usuário do banco
	// terceiro é a senha
	//uplant é o nome do banco

?>
