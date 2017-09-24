<?php session_start(); ?>
<?php include "componentes/header.php";   include "scripts/alteraData.php";?>

<?php 

	
        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
            header("Location: login.php");
            exit;
        } else {

      $mail = $_SESSION["email"];


      $query_Select = "SELECT name, DataNascimento, CPF, RG, EstadoCivil, Pais, CEP, UF, Cidade, Endereco, Numero, Complemento, DDDResidencial, NumeroResidencial, DDDCelular, NumeroCelular, Profissao, Empresa, Cargo FROM users WHERE email = '$mail'";

      $query = mysqli_query($conexao, $query_Select)
                             or die (mysqli_error());


	  while ($fetch = mysqli_fetch_array($query)){

	        $nome = $fetch[0];
	        $nascimento = $fetch[1];
	        $cpf = $fetch[2];
	        $rg = $fetch[3];
	        $civil = $fetch[4];
	        $pais = $fetch[5];
	        $Cep = $fetch[6];
	        $UF =  $fetch[7];
	        $cidade = $fetch[8];
	        $endereco = $fetch[9];
	        $numero = $fetch[10];
	        $complemento = $fetch[11];
	        $dddRes = $fetch[12];
	        $telefone = $fetch[13];
	        $dddcel = $fetch[14];
	        $celular = $fetch[15];
	        $profissao = $fetch[16];
	        $empresa = $fetch[17];
	        $cargo = $fetch[18];

	        }

	    if(isset($_POST['cadastro']) && $_POST['cadastro'] == 'cad') {

	    			$img = $_FILES['PerfilImage'];
                    $nome = $_POST['nome'];
                    $dataNascimento = muda_data($_POST['dataNascimento']);
                    $cpf = $_POST['CPF'];
                    $civil = $_POST['Civil'];
                    $pais = $_POST['pais'];
                    $Cidade = $_POST['Cidade'];
                    $UF = $_POST['uf'];
                    $CEP = $_POST['cep'];
                    $rg = $_POST['RG'];
                    $endereco = $_POST['endereco'];
                    $numerCasa = $_POST['numeroCasa'];
                    $complemento = $_POST['complemento'];
                    $telefone = $_POST['telefone'];
                    $celular = $_POST['celular'];
                    $profissao = $_POST['profissao'];
                    $empresa = $_POST['empresa'];
                    $cargo = $_POST['cargo'];
                    

                    //pasta no qual será incluso imagens de investimento
	                $pasta = "content/images/perfilUsuario";
	                $imgPermitida = array('image/jpg', 'image/jpeg', 'image/pjpeg');

	                //chamando função que realiza upload de imagens
	                require("scripts/funcao_upload.php");
	                $nameImage = $img['name']; 
	                $tmp = $img['tmp_name'];
	                $type = $img['type'];

	                $select = "SELECT id FROM users where email = '$mail'";

                    $query_select = mysqli_query($conexao, $select)
                      	or die (mysqli_error());

                    $fetch = mysqli_fetch_array($query_select);
				    $id = $fetch[0];

	                $nameImage = strval($id) . ".jpg";
	                Redimensionar($tmp, $nameImage, 500, $pasta);

                    $cadastra_usuario = "UPDATE users SET name = '$nome', DataNascimento = '$dataNascimento', CPF = '$cpf', RG = '$rg', EstadoCivil = '$civil', Pais = '$pais', CEP = '$CEP', UF = '$UF', Cidade = '$Cidade', Endereco = '$endereco', Numero = '$numerCasa', Complemento = '$complemento', NumeroResidencial = '$telefone', NumeroCelular = '$celular', Profissao = '$profissao', Empresa = '$empresa', Cargo = '$cargo', imagemPefil = '$nameImage' WHERE id = '$id' ";

                      $query_insert = mysqli_query($conexao, $cadastra_usuario)
                      	or die (mysqli_error());

                      if($query_insert) {
                        
                        echo "<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');
                        window.location.href='perfilUsuario.php'</script>";

                      } else {
                       echo "<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar usuário');</script>";
                      }

                    }
                

 ?>

    <div class="layout-2cols">
        <div class="content grid_12">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Ficha cadastral do Usuário</h2>
                    <div class="box-white">
                        <form id="cadastro" class="clearfix" action="" method="POST"  enctype="multipart/form-data">
                            <div class="form form-post-comment">
                            	<h3>Dados Pessoais</h3>
                                <div class="left-input">
                            		<!-- nome -->
	                                <label for="txt_name_contact">
                                		<p>Nome</p>
	                                    <input id="txt_name_contact" type="text" name="nome" placeholder="Insira seu nome" class="txt fill-width txt-name" value="<?php if(!empty($nome)){ echo $nome;} else {echo "";};?>"  />
	                                </label>
	                            </div>
	                             <div class="right-input">
		                            <!-- email -->
	                                <label for="txt_email_contact">
	                                	<p>E-mail</p>
	                                    <input id="txt_email_contact" type="email" name="email" class="txt fill-width txt-email"  readonly value="<?php echo $mail;?>" />
	                                </label>
	                            </div>
                                <div class="left-input">
                                	<!-- data nascimento -->
	                                <label for="txt_name_contact">
                                		<p style="margin-top: -15px">Data Nascimento</p>
	                                    <input id="txt_name_contact" type="text" name="dataNascimento" placeholder="Data de nascimento" class="txt fill-width txt-name" onkeypress="mascaraData(this)" maxlength="10" value="<?php if(!empty($nascimento)){ echo $nascimento;} else {echo "";};?>"  />
	                                </label>

	                            </div>
	                            <div class="right-input">
									<!-- rg -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">RG</p>
	                                    <input id="txt_name_contact" type="text" name="RG" onkeypress="mascaraRG(this)" placeholder="RG" class="txt fill-width txt-name" maxlength="12" value="<?php if(!empty($rg)){ echo $rg;} else {echo "";};?>"   />
	                                </label>
	                            </div>
                                <div class="left-input">
                                	<!-- cpf -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">Cpf</p>
	                                    <input id="txt_name_contact" type="text" onkeypress="mascaraCPF(this)" maxlength="14" name="CPF" placeholder="CPF" class="txt fill-width txt-name" value="<?php if(!empty($cpf)){ echo $cpf;} else {echo "";};?>"  />
	                                </label>
	                            </div>

	                            <div class="right-input">
	                            	<!-- telefone -->
	                            	<p style="margin-top: -15px">Telefone</p>
	                                <label for="txt_name_contact">
	                                    <input id="txt_name_contact" type="number" name="telefone" placeholder="Telefone" class="txt fill-width txt-name" value="<?php if(!empty($telefone)){ echo $telefone;} else {echo "";};?>"  />
	                                </label>

	                            </div>
	                            <div class="left-input">
	                            	 <!-- celular -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">Celular</p>
	                                    <input id="txt_name_contact" type="number" name="celular" placeholder="Celular" class="txt fill-width txt-name" value="<?php if(!empty($celular)){ echo $celular;} else {echo "";};?>"  />
	                                </label>
	                            </div>
	                            <div class="right-input">
 									<!-- civil -->
	                                <label for="txt_name_contact">
	                                    <p style="margin-top: -15px">Estado Civil</p>
	                                    <input id="txt_name_contact" type="text" name="Civil" placeholder="Estado Civil" class="txt fill-width txt-name" value="<?php if(!empty($civil)){ echo $civil;} else {echo "";};?>"  />
	                                </label>
	                            </div>
	                            <div class="row-item clearfix">
				                <label class="lbl" for="">Imagem do Perfil:</label>
					                <div class="val">
					                    <input type="file" name="PerfilImage" id="PerfilImage" accept="image/jpeg" />
					                </div>
					            </div>


                                <p class="rs ta-r clearfix">
	                            <h3>Dados Regionais</h3>

	                            <div class="left-input">
                                	<!-- endereco -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">País</p>
	                                    <input id="txt_name_contact" type="text" name="pais" placeholder="País" class="txt fill-width txt-name" value="<?php if(!empty($pais)){ echo $pais;} else {echo "";};?>"  />
	                                </label>
	                            </div>

	                            <div class="right-input">
	                            	<!-- numero residencia -->
	                                <label for="txt_name_contact">
	                                	<p  style="margin-top: -15px">Cidade</p>
	                                    <input id="txt_name_contact" type="text" name="Cidade" placeholder="cidade" class="txt fill-width txt-name" value="<?php if(!empty($cidade)){ echo $cidade;} else {echo "";};?>"  />
	                                </label>
	                            </div>

	                             <div class="right-input">
	                            	<!-- numero residencia -->
	                                <label for="txt_name_contact">
	                                	<p  style="margin-top: -15px">UF</p>
	                                    <input id="txt_name_contact" type="text" name="uf" placeholder="uf" maxlength="2" class="txt fill-width txt-name" value="<?php if(!empty($uf)){ echo $uf;} else {echo "";};?>"  />
	                                </label>
	                            </div>

                                <div class="left-input">
                                	<!-- endereco -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">Endereço</p>
	                                    <input id="txt_name_contact" type="text" name="endereco" placeholder="Endereço" class="txt fill-width txt-name" value="<?php if(!empty($endereco)){ echo $endereco;} else {echo "";};?>"  />
	                                </label>
	                            </div>
	                            <div class="left-input">
                                	<!-- endereco -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">CEP</p>
	                                    <input id="txt_name_contact" type="text" name="cep" placeholder="CEP" class="txt fill-width txt-name" value="<?php if(!empty($cep)){ echo $cep;} else {echo "";};?>"  />
	                                </label>
	                            </div>

	                            <div class="right-input">
	                            	<!-- numero residencia -->
	                                <label for="txt_name_contact">
	                                	<p  style="margin-top: -15px">Número da residencia</p>
	                                    <input id="txt_name_contact" type="number" name="numeroCasa" placeholder="Número" class="txt fill-width txt-name" value="<?php if(!empty($numero)){ echo $numero;} else {echo "";};?>"  />
	                                </label>
	                            </div>
                                <div class="left-input">
                                	<!-- complemento -->
	                                <label for="txt_name_contact">
	                                <p  style="margin-top: -15px">Complemento</p>
	                                    <input id="txt_name_contact" type="number" name="complemento" placeholder="Complemento" class="txt fill-width txt-name" value="<?php if(!empty($complemento)){ echo $complemento;} else {echo "";};?>"  />
	                                </label>
	                            </div>

                                <p class="rs ta-r clearfix">


	                            <h3>Dados Profissionais</h3>

	                            <div class="left-input">
									<!-- profissao -->
	                                <label for="txt_name_contact">
	                                	<p style="margin-top: -15px">Profissao</p>
	                                    <input id="txt_name_contact" type="text" name="profissao" placeholder="Profissao" class="txt fill-width txt-name" value="<?php if(!empty($profissao)){ echo $profissao;} else {echo "";};?>"  />
	                                </label>
	                            </div>
                                <div class="right-input">
 									<!-- empresa -->
	                                <label for="txt_name_contact">
	                                	<p  style="margin-top: -15px">Empresa</p>
	                                    <input id="txt_name_contact" type="text" name="empresa" placeholder="Empresa" class="txt fill-width txt-name" value="<?php if(!empty($empresa)){ echo $empresa;} else {echo "";};?>"  />
	                                </label>
	                            </div>

	                            <div class="left-input">

	                                <!-- cargo -->
	                                <label for="txt_name_contact">
	                                	<p  style="margin-top: -15px">Cargo</p>
	                                    <input id="txt_name_contact" type="text" name="cargo" placeholder="Cargo" class="txt fill-width txt-name" value="<?php if(!empty($cargo)){ echo $cargo;} else {echo "";};?>"  />
	                                </label>	
	                            </div>

                                <div class="clear"></div>
                                <p class="rs ta-r clearfix">
									<span id="response"></span>
                                	<input type="hidden" name="cadastro" value="cad"/>
                                    <input type="submit" class="btn btn-white btn-submit-comment" value="Enviar">
                               </p>
                            </div>
                        </form>
                    </div>
                </div><!--end: .box-list-comment -->
        </div><!--end: .content -->
    </div>

 <?php 
 	}
  ?>
<?php include "componentes/footer.php" ?>