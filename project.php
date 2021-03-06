 <?php session_start(); ?>
<?php
    include "componentes/header.php";?>
    <?php

        if (isset($_GET['tmpId'])){
            $tmpId = $_GET['tmpId'];
            $investimento_query = "SELECT  nome_plantacao, nome_agricultor, texto, thumb_plantacao, numero_investidores, total_arrecadado, total_dias, valorInvestimento, email_agricultor  FROM investimento where id = $tmpId ";
            $resultado_query = mysqli_query($conexao,$investimento_query)
                            or die (mysqli_error());

            $fetch = mysqli_fetch_array($resultado_query);

            $nome_plantacao = $fetch[0];
            $nome_agricultor = $fetch[1];
            $texto = $fetch[2];
            $thumb_plantacao = $fetch[3];
            $numero_investidores = $fetch[4];
            $total_arrecadado = $fetch[5];
            $total_dias = $fetch[6];
            $valorInvestimento = $fetch[7];
            $emailAgricultor = $fetch[8];

            if ($valorInvestimento == 0)
                $porcentagem = 0;
            else
                $porcentagem = ($total_arrecadado/$valorInvestimento) *100;

            $investimento_queryUser = "SELECT name, email, Pais, UF, Cidade, Profissao, Empresa, Cargo, imagemPefil  FROM users where email = '$emailAgricultor' ";
            $resultado_queryUser = mysqli_query($conexao, $investimento_queryUser)
                            or die (mysqli_error());

            $fetchUser = mysqli_fetch_array($resultado_queryUser);

            $nomeAgricultor = $fetchUser[0];
            $email = $fetchUser[1];
            $pais = $fetchUser[2];
            $UF = $fetchUser[3];
            $cidade = $fetchUser[4];
            $profissao = $fetchUser[5];
            $empresa = $fetchUser[6];
            $cargo = $fetchUser[7];
            $imgPerfil = $fetchUser[8];


        }
        else
            $tmpId = null;

     ?>

    <?php
        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
           ?> <script> $('.btn-login').css('display', 'initial');</script> <?php
        } else {
    ?>
    <script>
       $('.btn-login').css('display', 'none');
       $('.btn-cadastro').css('display', 'none');
       $('.btn-perfil').css('display', 'initial');
       $('.btn-logout').css('display', 'initial');
    </script>
    <?php } ?>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <h2 class="rs project-title"><?php echo  $nome_plantacao; ?></h2>
                <p class="rs post-by">por <?php echo  $nomeAgricultor; ?></p>
                <div class="project-short big-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <div class="thumb-img">
                                <img src="content/images/plantacaoInvestimentos/<?php echo $thumb_plantacao; ?>.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="bottom-project-info clearfix">
                        <div class="project-progress sys_circle_progress" data-percent="<?php echo number_format($porcentagem, 1); ?>">
                            <div class="sys_holder_sector"></div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Investidores</p>
                                <span class="val"><?php if ($numero_investidores == 0) { echo "Invista!";} else echo $numero_investidores; ?></span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Verba Necessária</p>
                                <span class="val">R$ <?php echo number_format($valorInvestimento, 2, ',', '.');  ?></span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Dias restantes</p>
                                <span class="val"><?php echo $total_dias; ?></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">Descrição</a></li>
                      <li><a href="#" class="be-fc-orange">Agricultor</a></li>
                     <li><a href="#" class="be-fc-orange">Localização</a></li>
                      <!--  <li><a href="#" class="be-fc-orange">Comments (2)</a></li> -->
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Descrição</h3>
                            <div class="tab-pane active accordion-content">
                                <div class="editor-content">
                                    <p><?php echo utf8_encode($texto); ?><p>
                                    <div class="social-sharing">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                                        <!-- AddThis Button END -->
                                    </div>
                                </div>
                            </div><!--end: .tab-pane(About) -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Agricultor</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="list-last-post">
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="content/images/perfilUsuario/000.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b"><?php echo utf8_encode($nomeAgricultor); ?></a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10"></p>
                                                <p class="rs description">E-mail: <?php echo utf8_encode($email); ?><br>Localização: <?php echo utf8_encode($cidade).", ".$UF; ?><br>Profissão: <?php echo utf8_encode($profissao);?><br>Empresa: <?php  echo utf8_encode($empresa)?><br>Cargo: <?php echo utf8_encode($cargo); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Localização</h3>
                            <div class="tab-pane accordion-content">
                                <div id="map" style="width: 100%"></div>
                            </div>
                        </div>
<!--                         <div>
                            <h3 class="rs active alternate-tab accordion-label">Comments (2)</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-list-comment">
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/ex/th-90x90-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">John Doe</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Fusce tellus. Sed metus augue, convallis et, vehicula ut, pulvinar eu, ante. Integer orci tellus, tristique vitae, consequat nec, porta vel, lectus</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/ex/th-90x90-2.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Eminem</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item lv2">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/ex/th-90x90-3.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Snoop Dogg</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item lv2">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/ex/th-90x90-4.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Obama</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Curabitur vel dolor ultrices ipsum dictum tristique. Praesent vitae lacus. Ut velit enim, vestibulum non, fermentum nec,</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item lv3">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/no-avatar.png" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Mark Lenon</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="content/images/ex/th-90x90-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Dr. Dre</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Morbi eget arcu. Morbi porta, libero id ullamcorper nonummy, nibh ligula pulvinar metus, eget consectetuer augue nisi quis lacus. Ut ac mi quis lacus mollis aliquam. Curabitur iaculis tempus eros. Curabitur vel mi sit amet magna malesuada ultrices</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="project-runtime">
                <div class="box-gray">
                    <div class="project-date clearfix">
                        <i class="icon iCalendar"></i>
                        <span class="val"><span class="fw-b">Início: </span>26 Out 2017</span>
                    </div>
                    <!-- <div class="project-date clearfix">
                        <i class="icon iClock"></i>
                        <span class="val"><span class="fw-b">Fim: </span>Apr 8, 2013</span>
                    </div>      -->
                    <form name="Investimentir" action="investir.php?tmpId=<?php echo $tmpId; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden"  name="tmpId"  value="<?php echo $tmpId; ?>"/>
                        <a href="investir.php?tmpId=<?php echo $tmpId; ?>" class="btn btn-green btn-buck-project"   >
                            <span class="lbl">Invista nesse projeto!!</span>
                            <span class="desc">Valor mínimo de 10% do projeto</span>
                        </a>
                    </form>
                    <p class="rs description">Esse projeto pretende chegar a R$x. Caso não alcaçar até dia xx/xx/xxxx, projeto se iniciará com essa mesma verba recolhida.</p>
                </div>
            </div><!--end: .project-runtime -->
            <div class="project-author">
                <div class="box-gray">
                    <h3 class="title-box">Investimento por</h3>
                    <div class="media">
                        <a href="#" class="thumb-left">
                            <img src="content/images/perfilUsuario/000.jpg" alt="$USER_NAME"/>
                        </a>
                        <div class="media-body">
                            <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php echo utf8_encode($nomeAgricultor) ?></a></h4>
                            <p class="rs"><?php echo utf8_encode($cidade) ?>, <?php echo $UF ?></p>
                        </div>
                    </div>
                </div>
            </div><!--end: .project-author -->
            <div class="clear clear-2col"></div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
<?php include "componentes/footer.php";?>
