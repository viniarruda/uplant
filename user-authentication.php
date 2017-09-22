<?php include "scripts/conexao.php";?>

<html>
<head>
	<title>Autenticando usuário</title>
	<script type="text/javascript">
		function loginsucessfully() {
			setTimeout("window.location='perfilAdmin.php'", 100);

		}

		function loginfailed() {
			setTimeout("window.location='login.php'", 100);
		}

	</script>
</head>
<body>
<?php
	$email=$_POST['email'];
	$password=$_POST['passwordLogin'];
	$valida_login= "SELECT * FROM users WHERE email = '$email' and password = '$password' ";

	$query = mysqli_query($conexao, $valida_login)
                         or die (mysqli_error());

	if( @mysqli_num_rows($query) >= '1' ) {

		while ($fetch = mysqli_fetch_array($query)){
            $nivel_acesso = $fetch[4];

            session_start();
			$_SESSION['email']=$_POST['email'];
			$_SESSION['passwordLogin']=$_POST['passwordLogin'];


            if ($nivel_acesso == "admin") {
            	header("Location: perfilAdmin.php");
            } else {
            	header("Location: perfilUsuario.php");
            }

        }



	} else {
		echo "<center>Nome de usuário ou senha inválidos! Tente novamente.</center>";
		echo "<script>loginfailed();</script>";
	}
?>

</body>
</html>
