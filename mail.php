<?php
$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR']; // função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // função para pegar o navegador do visitante
$hora      = date("H:i"); // para pegar a hora com a função date
$nome	     = $_POST["nomeContato"];
$email 	     = $_POST["emailContato"];
$telefone    = $_POST["telefone"];
$cidade      = $_POST["cidade"];
$website     = $_POST["website"];
$subject	 = $_POST["subject"];
$mensagem    = $_POST["mensagem"];
$assunto 	 = "Uplant - Contato ";
$message = "Nome: $nome <br />
			Email: $email<br />
			Enviado: $data $hora<br />
			Telefone: $telefone<br />
			Conteudo: $mensagem<br /> <br />
			Data: $data . $hora<br />
			Ip: $ip<br />
			Navegador:  $navegador";
$email_remetente = "vinny-arruda@hotmail.com";
$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: $email_remetente"; // remetente
$headers .= "Return-Path: $email_remetente"; // return-path
$headers .= "Reply-To: $email_usuario"; // Endereço (devidamente validado) que o seu usuário informou no contato
$envio = mail("vinny-arruda@hotmail.com", $assunto, $message, $headers, "-f$email_remetente");
echo "<META HTTP-EQUIV=REFRESH CONTENT= '0; URL=contato.php'>
<script type=\"text/javascript\">
alert(\"$nome, sua mensagem foi enviada com sucesso!\");
</script>
";
?>
