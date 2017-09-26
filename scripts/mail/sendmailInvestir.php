<?php
	include '../conexao.php';
	//pego os dados enviados pelo formulario

    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    $valor = $GetPost['valor'];
    $obsevacoes = $GetPost['message'];

    $tmpIdU = $_GET['tmpIdU'];
	  $usuario_query = "SELECT id, name, email, DataNascimento, CPF, RG, EstadoCivil, Pais, CEP, UF, Cidade, Endereco, Numero, Complemento, DDDResidencial, NumeroResidencial, DDDCelular, NumeroCelular, Profissao, Empresa, Cargo
                FROM users
                WHERE id = '$tmpIdU' ";
    $resultado_query = mysqli_query($conexao, $usuario_query)
                        or die (mysqli_error());


      while ($fetch = mysqli_fetch_array($resultado_query)){

          $id_usuario 				= $fetch[0];
          $nome_usuario = $fetch[1];
          $email_usuario = $fetch[2];
          $DataNascimento_usuario = $fetch[3];
          $CPF_usuario = $fetch[4];
          $RG_usuario = $fetch[5];
          $EstadoCivil_usuario = $fetch[6];
          $CEP_usuario = $fetch[7];
          $UF_usuario = $fetch[8];
          $Cidade_usuario = $fetch[9];
          $Endereco_usuario = $fetch[10];
          $Numero_usuario = $fetch[11];
          $Complemento_usuario = $fetch[12];
          $DDDResidencial_usuario = $fetch[13];
          $NumeroResidencial_usuario = $fetch[14];
          $DDDCelular_usuario = $fetch[15];
          $NumeroCelular_usuario = $fetch[16];
          $Profissao_usuario = $fetch[17];
          $Empresa_usuario = $fetch[18];
          $Cargo_usuario = $fetch[19];
        }

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

        $updateQuery = "UPDATE investimento SET total_arrecadado = $novoSaldo, numero_investidores = $numero_investidores WHERE id = $tmpId";
        $resultado_query = mysqli_query($conexao,$updateQuery)
                        or die (mysqli_error());

        $dataEnvio = date("Y-m-d");
        $status = "Aguardando Pagamento";

        $updateQueryAplicacao = "INSERT INTO aplicacao (ValorAplicado, FK_IdProjeto, FK_IdInvestidor, StatusPagamento, DataAplicacao)
                                VALUES ('$valor', '$tmpId', '$tmpIdU', '$status', '$dataEnvio') ";
        $resultado_query = mysqli_query($conexao,$updateQueryAplicacao)
                        or die (mysqli_error());
    }
    else{
        $tmpId = null;
    }



	$assunto = "Investimento";
	$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
	$email_from = "gustavoaoshiro@gmail.com";
	$message = "
INFORMAÇÕES DO USUARIO

ID:				$id_usuario
Nome:				$nome_usuario
E-mail:				$email_usuario


INFORMAÇÕES DO INVESTIMENTO

ID:  $tmpId
Plantação:	$nome_plantacao
Nome Agricultor:	$nome_agricultor
Total Arrecadado:	$total_arrecadado
Numero Investidores:	$numero_investidores


Enviado: 	$data
Valor desejado: 	$valor
Observaçoes: 	$obsevacoes
Investir na plantação $nome_plantacao, do agricultor $nome_agricultor que já possui R$ $total_arrecadado";

	$email_remetente = "contato@uplant.com.br";
	$headers = "MIME-Version: 1.1";
	$headers .= "Content-type: text/html; charset=utf-8";
	$headers .= "From: $email_remetente"; // remetente
	$headers .= "Return-Path: $email_remetente"; // return-path
	$envio = mail("contato@uplant.com.br", $assunto, $message, $headers);

?>
<?php



    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
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

    }
    else{
        $tmpId = null;
    }



	$assunto = "Investimento";
	$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
	$email_from = $email_usuario;
	$message = "

INFORMAÇÕES DO INVESTIMENTO

ID:  $tmpId
Plantação:	$nome_plantacao
Nome Agricultor:	$nome_agricultor
Total Arrecadado:	$total_arrecadado
Numero Investidores:	$numero_investidores


Enviado: 	$data
Valor desejado: 	$valor
Observaçoes: 	$obsevacoes
Investir na plantação $nome_plantacao, do agricultor $nome_agricultor que já possui R$ $total_arrecadado

Ficamos no aguardo do investimento";

	$email_remetente = $email_usuario;
	$headers = "MIME-Version: 1.1";
	$headers .= "Content-type: text/html; charset=iso-8859-1";
	$headers .= "From: $email_usuario"; // remetente
	$headers .= "Return-Path: $email_remetente; gustavoaoshiro@gmail.com"; // return-path
	$envio = mail($email_usuario, $assunto, $message, $headers);
	echo "<META HTTP-EQUIV=REFRESH CONTENT= '0; URL=../../project.php?tmpId=$tmpId'>
	<script type=\"text/javascript\">
	alert(\"E mail enviado com sucesso\");
	</script>
	";
?>
