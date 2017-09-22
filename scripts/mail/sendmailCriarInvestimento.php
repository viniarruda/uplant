<?php 
	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
	$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
	$ip        = $_SERVER['REMOTE_ADDR']; // função para pegar o ip do usuário
	$navegador = $_SERVER['HTTP_USER_AGENT']; // função para pegar o navegador do visitante
	$hora      = date("H:i"); // para pegar a hora com a função date
	$nome	     = $GetPost['nomeAgricultor'];
	$nascimento  = $GetPost['nascimento'];
	$email 	     = $GetPost['email'];
	$telefone    = $GetPost['telefone'];
	$RG    		 = $GetPost['RG'];
	$CPF    	 = $GetPost['CPF'];
	$Projeto     = $GetPost['nomeProjeto'];
	$dataInicio  = $GetPost['dataInicio'];
	$qtdDias     = $GetPost['diasProjeto'];
	$verba       = $GetPost['verba'];
	$resumo      = $GetPost['resumo'];
	$detalhado      = $GetPost['detalhado'];
	$img      = $GetPost['thumb_plantacao'];
	$pdf      = $GetPost['nome_documento'];
	$assunto 	 = "Criação de Investimento";
	$message = "DADOS PESSOAIS DO CLIENTE
Nome	$nome
Email: 			$email
Enviado: 		$data
Nascimento: 		$nascimento
Telefone: 		$telefone 
RG: 			$RG 			
CPF: 			$CPF

DADOS DO EMPREENDIMENTO<br />
Projeto: 	$Projeto 			
Data de Início: 	$dataInicio 		
Verba Necessária: 	$verba 
Resumo da plantação: 	$resumo 
Descrição:		$detalhado
Data:		$data
Ip: 		$ip 
Navegador:  $navegador";
	$email_remetente = "gustavoaoshiro@gmail.com";
	$headers = "MIME-Version: 1.1";
	$headers .= "Content-type: text/html; charset=iso-8859-1";
	$headers .= "From: $email_remetente"; // remetente
	$headers .= "Return-Path: $email_remetente"; // return-path
	$envio = mail("gustavoaoshiro@gmail.com", $assunto, $message, $headers, "-f$email_remetente");
	echo "<META HTTP-EQUIV=REFRESH CONTENT= '0; URL=../../investir.php'>
	<script type=\"text/javascript\">
	alert(\"$Usuario, sua mensagem foi enviada com sucesso!\");
	</script>
	";
	
?>