<?php

	// $hostname_config = "localhost";
	// $database_config = "uplant";
	// $username_config = "root";
	// $password_config = "";

	$hostname_config = "mysql552.umbler.com";
 	$database_config = "uplant";
 	$username_config = "uplant_adm";
 	$password_config = "uplant#17";
	
	
	$conexao = mysqli_connect("$hostname_config","$username_config","$password_config","$database_config")
				or die (mysqli_error());
	//quando subir, trocar o localhost pelo endereço do servidor
	//root é o usuário, quando subir, alterar pelo usuário do banco
	// terceiro é a senha
	//uplant é o nome do banco

?>
