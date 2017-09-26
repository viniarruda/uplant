<?php session_start(); ?>
<?php include "componentes/header.php";?>
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
<div id="home-slider">
    <div class="md-slide-items md-slider" id="md-slider-1" data-thumb-width="105" data-thumb-height="70">
        <div class="md-slide-item slide-0" data-timeout="10000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide0.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="50" data-width="480" data-height="30" data-start="700" data-stop="9000" data-easein="random" data-easeout="keep">
                    <h5>Procura por um investimento rentável?</h5>
                </div>
                <div class="md-object rs slide-description" data-x="20" data-y="200" data-width="480" data-height="90" data-start="1400" data-stop="9500" data-easein="random" data-easeout="keep">
                    <p>Seleção das safras com as melhores rentabilidades realizados pela nossa equipe</p>
                </div>
                <div class="md-object" data-x="495" data-y="0" data-width="612" data-height="365" data-start="1800" data-stop="7500" data-easein="fadeInRight" data-easeout="keep" style=""><img src="content/images/ex/th-slide-man.png" alt="Search Money for Your Creative Ideas" width="612" height="365" /></div>
            </div>
        </div>
        <div class="md-slide-item slide-2" data-timeout="10000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide2.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object slide-with-background" data-x="20" data-y="58" data-width="500" data-height="170" data-padding-top="30" data-padding-bottom="30" data-padding-left="35" data-padding-right="35" data-start="300" data-stop="9500" data-easein="random" data-easeout="keep">
                    <h2 class="rs slide-title">Segurança</h2>
                    <p class="rs slide-description2">Nossos projetos são submetidos à CVM, responsável por fiscalizar o setor financeiro no Brasil</p>
                </div>
            </div>
        </div>
        <div class="md-slide-item slide-1" data-timeout="10000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide1.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="50" data-width="480" data-height="30" data-start="700" data-stop="9000" data-easein="random" data-easeout="keep">
                    <h5>Ficou curioso?</h5>
                </div>
                <div class="md-object rs slide-description2" data-x="20" data-y="150" data-width="390" data-height="100" data-start="1400" data-stop="9500" data-easein="random" data-easeout="random">
                    <p>Invista sem custos e burocracia - A plataforma funciona 100% online sem nenhumataxa para o investidor.</p>
                </div>
            </div>
        </div>
        
    </div>
</div><!--end: #home-slider -->
<div class="home-popular-project" style="margin: 40px 0px  40px 0px">
    <div class="container_12 clearfix">
            <div class="grid_12 marked-category">
                <div class="wrap-title clearfix">
                    <h2 class="title-mark rs pb30" >Quem Somos</h2>
                    <p class="rs pb30">Investir no segmento agrícola é uma das mais tradicionais formas de rentabilização de patrimônio, e há inumeras formas de investimento neste setor. Entretanto, os maiores lucros do segmento agrícola sempre foram restritos ao grandes produtores rurais - grande latifundiarios, que aplicavam seus recursos em tecnologia e grandes safras. O Uplant é uma plataforma de investimento agrícola que quebra esse paradigma, utilizando conceito de crowdfunding para tornar estes investimentos acesíveis a todos e dar acesso aos pequenos produtores rurais, recursos financeiros para sua produção agrícola.</p>
                    <p class="rs pb30"><a class="" href="quemsomos.php">Conheça Nossa equipe >> </a></p>
                </div>
                <div class="clear"></div>
            </div><!--end: .marked-category -->
            <div class="clear"></div>
        </div>
</div>
<div class="home-feature-category" style="box-shadow: 0 1px 3px rgba(0,0,0,0.1) inset;-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1) inset;-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1) inset;">
    <div class="container_12 clearfix">
        <div class="grid_12 marked-category">
            <div class="wrap-title clearfix">
                <h2 class="title-mark rs">Nossa Empresa</h2>
            </div>
            <div class="clear"></div>
            <center>
                <iframe id="frame" width="500" height="315" style="border: none" src="https://www.youtube.com/embed/oDkYTJ3cQjY"></iframe>
            </center>
        </div><!--end: .marked-category -->
        <div class="clear"></div>
    </div>
</div><!--end: .home-feature-category -->
<div class="home-popular-project">
    <div class="container_12">
        <div class="grid_12 wrap-title">
            <h2 class="common-title">Investimentos</h2>
            <a class="be-fc-orange" href="investimentos.php">Conheça todos >> </a>
        </div>
        <div class="clear"></div>
        <div class="lst-popular-project clearfix">
            <?php include "subPages/listaProjetosIndex.php"; ?>
            <div class="grid_3">
                <div class="project-short sml-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="content/images/plantacaoInvestimentos/crie.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title">Crie seu projeto</h3>
                                <p class="rs tiny-desc">por Você!</p>
                                <p class="rs title-description">Projete seu plantio! Informe a localização, o retorno do investimento e o tempo de retorno! </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        <div class="line-progress">
                            <div class="bg-progress">
                                <span  style="width: <?php print number_format($porcentagem,1); ?>%"></span>
                            </div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item" >
                                <p class="rs lbl">Investidores</p>
                                <span class="val">Muitos Interessados</span>
                            </div>
                            <div class="clear"></div>
                            <div class="sep"></div>
                            <div class="fee-item" style="margin-left: -15px;">
                                <p class="rs lbl">Verba Necessária</p>
                                <span class="val">Você nos indica!</span>
                            </div>
                            <div class="clear"></div>
                            <div class="sep"></div>
                            <div class="fee-item" style="margin-left: -15px;">
                                <p class="rs lbl">Termina em</p>
                                <span class="val">Um ótimo prazo!</span>
                            </div>
                            <div class="sep"></div>
                            <div class="clear"></div>
                            <form name="visualizarInvestimento" action="enviarInvestimento.php>" method="POST" enctype="multipart/form-data">
                                <input type="hidden"  name="id_investimento"  value="<?php echo $id_investimento; ?>"/>
                                <input style="width: 100%; " type="submit" value="Crie o seu!" class="btn btn-red"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end: .home-popular-project -->
<?php include("componentes/footer.php") ?>
