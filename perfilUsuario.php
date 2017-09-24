<?php session_start(); ?>
<?php
        include "componentes/header.php";

        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
            header("Location: login.php");
            exit;
        } else {
?>

<?php
     $mail = $_SESSION["email"];

      $usuario_query = "SELECT id, name, email, DataNascimento, CPF, RG, EstadoCivil, Pais, CEP, UF, Cidade, Endereco, Numero, Complemento, DDDResidencial, NumeroResidencial, DDDCelular, NumeroCelular, Profissao, Empresa, Cargo, imagemPefil
                    FROM users 
                    WHERE email = '$mail' ";
      $resultado = mysqli_query($conexao,$usuario_query)
                          or die (mysqli_error());

      while ($fetch = mysqli_fetch_array($resultado)){

          $id_usuario = $fetch[0];
          $nome_usuario = $fetch[1];
          $email_usuario = $fetch[2];
          $DataNascimento_usuario = $fetch[3];
          $CPF_usuario = $fetch[4];
          $RG_usuario = $fetch[5];
          $EstadoCivil_usuario = $fetch[6];
          $Pais_usuario = $fetch[7];
          $CEP_usuario = $fetch[8];
          $UF_usuario = $fetch[9];
          $Cidade_usuario = $fetch[10];
          $Endereco_usuario = $fetch[11];
          $Numero_usuario = $fetch[12];
          $Complemento_usuario = $fetch[13];
          $DDDResidencial_usuario = $fetch[14];
          $NumeroResidencial_usuario = $fetch[15];
          $DDDCelular_usuario = $fetch[16];
          $NumeroCelular_usuario = $fetch[17];
          $Profissao_usuario = $fetch[18];
          $Empresa_usuario = $fetch[19];
          $Cargo_usuario = $fetch[20];
          $Img = $fetch[21];
        }


        $aplicacao_query = "SELECT DataAplicacao, FK_IdProjeto, ValorAplicado, StatusPagamento
                          FROM aplicacao
                          WHERE FK_IdInvestidor = '$id_usuario' ";
        
        $resultadoAplicacao = mysqli_query($conexao,$aplicacao_query)
                          or die (mysqli_error());

        $count = mysqli_query($conexao, "SELECT COUNT(*) FROM aplicacao WHERE FK_IdInvestidor = '$id_usuario'")
                  or die (mysqli_error());
        $fe = mysqli_fetch_array($count);
        $counta = $fe[0];


   

?>
    <script>
       $('.btn-login').css('display', 'none');
       $('.btn-perfil').css('display', 'initial');
    </script>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active" ><a href="#">Conta</a></li>
                      <li><a href="#" class="be-fc-orange">Meus investimentos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Conta</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="content/images/perfilUsuario/<?php echo $Img; ?>.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php echo $nome_usuario; ?></a></h4>
                                                <p class="rs"><?php echo $Cidade_usuario; ?></p>
                                                <p class="rs fc-gray pb10">0 Projetos</p>
                                                <div class="legenda_perfil">
                                                  <p class="rs telefone"><b>Data Nascimento:</b> <?php echo $DataNascimento_usuario; ?>    </p>
                                                  <p class="rs legenda"><b>CPF:</b> <?php echo $CPF_usuario; ?></p>
                                                  <p class="rs legenda"><b>RG:</b> <?php echo $RG_usuario; ?></p>
                                                  <p class="rs cpf"><b>E-mail:</b> <?php echo $email_usuario; ?></p>
                                                  <p class="rs cpf"><b>Estado Civil:</b> <?php echo $EstadoCivil_usuario; ?></p>
                                                  <p class="rs cpf"><b>CEP:</b> <?php echo $CEP_usuario; ?></p>
                                                  <p class="rs cpf"><b>Pais:</b> <?php echo $Pais_usuario; ?></p>
                                                  <p class="rs cpf"><b>UF:</b> <?php echo $UF_usuario; ?></p>
                                                  <p class="rs cpf"><b>Cidade:</b> <?php echo $Cidade_usuario; ?></p>
                                                  <p class="rs cpf"><b>Endereco:</b> <?php echo $Endereco_usuario; ?></p>
                                                  <p class="rs cpf"><b>Numero:</b> <?php echo $Numero_usuario; ?></p>
                                                  <p class="rs cpf"><b>Complemento:</b> <?php echo $Complemento_usuario; ?></p>
                                                  <p class="rs legenda"><b>Telefone:</b>  <?php echo "$NumeroResidencial_usuario" ; ?>  </p>
                                                  <p class="rs legenda"><b>Celular:</b>  <?php echo "$NumeroCelular_usuario" ; ?>  </p>
                                                  <p class="rs legenda"><b>Profissão:</b>  <?php echo  $Profissao_usuario; ?>  </p>
                                                  <p class="rs legenda"><b>Empresa:</b>  <?php echo  $Empresa_usuario; ?>  </p>
                                                  <p class="rs legenda"><b>Cargo:</b>  <?php echo  $Cargo_usuario; ?>  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label ">Projetos</h3>
                            <div class="tab-pane accordion-content">
                              <h4 class="rs comment-author">
                                <?php 
                                  if ($counta == 0) {
                                    echo "Nenhum investimento encontrado";
                                  }else{

                                  while ($fetchAplicacao = mysqli_fetch_array($resultadoAplicacao)){

                                    $dataAplicacao = $fetchAplicacao[0];
                                    $IdProjAplicacao = $fetchAplicacao[1];
                                    $ValorAplicacao = $fetchAplicacao[2];
                                    $StatusAplicacao = $fetchAplicacao[3];

                                    $count = mysqli_query($conexao, "SELECT nome_plantacao  FROM investimento WHERE id = '$IdProjAplicacao' ")
                                              or die (mysqli_error());
                                    $fe = mysqli_fetch_array($count);
                                    $nome_plantacao = $fe[0];



                                ?>
                                <div class="list-last-post">
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="content/images/plantacaoInvestimentos/<?php echo $IdProjAplicacao; ?>.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a class="be-fc-orange fw-b  pb10"><?php echo $nome_plantacao ?></a>
                                                </h4>
                                                <p class="rs fc-gray time-post">Valor Investido: <?php echo  $ValorAplicacao ?></p>
                                                <p class="rs "><?php echo $StatusAplicacao; ?></p>
                                                <form name="visualizarInvestimento" action="project.php?tmpId=<?php echo $IdProjAplicacao; ?>" method="POST" enctype="multipart/form-data">
                                                  <input type="hidden"  name="id_investimento"  value="<?php echo $id_investimento; ?>"/>
                                                  <input type="submit" value="Verificar Projeto" class="btn btn-red"/>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                } ?>
                              </h4>     
                            </div><!--end: .tab-pane -->
                        </div>
                      </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Bem-Vindo</h3>
                <div class="media">
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php echo $nome_usuario ?></a></h4>
                        <p class="rs"><?php echo $Cidade_usuario; ?></p>
                        <p class="rs fc-gray"><?php echo $count?> projetos</p>
                    </div>
                </div>
                <div class="author-action">
                    <form action="editarUsuario.php">
                      <input class="btn btn-red btn-buck-project" type="submit" value="Editar Usuário" class="btn btn-red"/>
                    </form>
                    <a class="btn btn-red" href="logout.php">Logout</a>
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
<?php }
?>
<?php include "componentes/footer.php";?>
