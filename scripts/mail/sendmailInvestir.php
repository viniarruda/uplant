<?php
	include '../conexao.php';
	//pego os dados enviados pelo formulario
    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    $Usuario = "Oshiro";
	$Email = $GetPost['email'];
	$valor = $GetPost['valor'];
	$obsevacoes = $GetPost['message'];
	
	if (isset($_GET['tmpId'])){
        $tmpId = $_GET['tmpId'];
        $investimento_query = "SELECT  nome_plantacao, nome_agricultor, total_arrecadado, numero_investidores FROM investimento where id = $tmpId";
        $resultado_query = mysqli_query($conexao, $investimento_query)
                        or die (mysqli_error());

        $fetch = mysqli_fetch_array($resultado_query);

        $nome_plantacao = $fetch[0];
        $nome_agricultor = $fetch[1];
        $total_arrecadado = $fetch[2];
        $numero_investidores = $fetch[3];

        if ($numero_investidores == null) {
        	$numero_investidores = 1;
        }
        else{
        	$numero_investidores ++;	
        }
        $novoSaldo = intval($total_arrecadado) + intval($valor) ;
        echo $novoSaldo;

        $updateQuery = "UPDATE investimento SET total_arrecadado = $novoSaldo, numero_investidores = $numero_investidores WHERE id = $tmpId";
        $resultado_query = mysqli_query($conexao,$updateQuery)
                        or die (mysqli_error());
    }
    else{
        $tmpId = null;
    }

	

	$assunto = "Investimento";
	$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
	$email_from = "gustavoaoshiro@gmail.com";
	$message = "
			Email: 		$Email
			Enviado: 	$data
			Valor: 	$valor
			Observaçoes: 	$obsevacoes 
			Investir na plantação $nome_plantacao, do agricultor $nome_agricultor que já possui R$ $total_arrecadado";

	$email_remetente = "gustavoaoshiro@gmail.com";
	$headers = "MIME-Version: 1.1";
	$headers .= "Content-type: text/html; charset=iso-8859-1";
	$headers .= "From: $email_remetente"; // remetente
	$headers .= "Return-Path: $email_remetente"; // return-path
	$envio = mail("gustavoaoshiro@gmail.com", $assunto, $message, $headers);
	echo "<META HTTP-EQUIV=REFRESH CONTENT= '0; URL=../../project.php?tmpId=$tmpId'>
	<script type=\"text/javascript\">
	alert(\"'$tmpId'\");
	</script>
	";
	
?>
<?php 

?>
