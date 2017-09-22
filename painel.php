<?php	
	$hostname_config = "localhost";
	$database_config = "uplant";
	$username_config = "root";
	$password_config = "";
	
	
	$conexao = mysqli_connect("$hostname_config","$username_config","$password_config","$database_config")
				or die (mysqli_error());
	//quando subir, trocar o localhost pelo endereço do servidor
	//root é o usuário, quando subir, alterar pelo usuário do banco
	// terceiro é a senha
	//uplant é o nome do banco

	session_start();
    if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
        header("Location: login.php");
        exit;
    } else {
        echo "Você está logado!";
    }
 ?>
 <html>
 <head>
 	<title>ADmin</title>
 </head>
 <body>
 	<a href="logout.php"><span class="txt-message btn-login"><i class="fa fa-user"></i> Logout</span></a>
 </body>
 </html>