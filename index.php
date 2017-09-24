<?php include 'componentes/header.php' ?>

<div id="home-slider">
    <div class="md-slide-items md-slider" id="md-slider-1" data-thumb-width="105" data-thumb-height="70">
        <div class="md-slide-item slide-0" data-timeout="6000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide0.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="38" data-width="480" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="keep">
                    <p>Uplant</p>
                </div>
                <div class="md-object rs slide-description" data-x="20" data-y="160" data-width="480" data-height="90" data-start="1400" data-stop="7500" data-easein="random" data-easeout="keep">
                    <p>Apenas aqui você tem proximidade com o setor primário de maneira lucrativa</p>
                </div>
                <div class="md-object rs" data-x="20" data-y="260" data-width="120" data-height="23" data-padding-top="9" data-padding-bottom="7" data-padding-left="10" data-padding-right="10" data-start="1800" data-stop="7500" data-easein="random" data-easeout="keep">
                    <a href="#" class="btn btn-gray">Saiba Mais</a>
                </div>
                <div class="md-object" data-x="495" data-y="0" data-width="612" data-height="365" data-start="1800" data-stop="7500" data-easein="fadeInRight" data-easeout="keep" style=""><img src="content/images/ex/th-slide-man.png" alt="Search Money for Your Creative Ideas" width="612" height="365" /></div>
            </div>
        </div>
        <div class="md-slide-item slide-1" data-timeout="6000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide1.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="50" data-width="390" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="random">
                    <p>Modelo regulado pela CVM</p>
                </div>
                <div class="md-object rs slide-description2" data-x="20" data-y="200" data-width="390" data-height="100" data-start="1400" data-stop="4500" data-easein="random" data-easeout="random">
                    <p>A plataforma funciona 100% online sem nenhuma taxa para o investidor.</p>
                </div>
                <div class="md-object" data-x="454" data-y="44" data-width="327" data-height="268" data-start="1000" data-stop="5500" data-easein="random" data-easeout="random" style=""><img src="content/images/ex/slide1_1.png" alt="Responsive" width="327" height="268" /></div>
                <div class="md-object" data-x="628" data-y="142" data-width="298" data-height="176" data-start="1600" data-stop="5100" data-easein="random" data-easeout="random" style=""><img src="content/images/ex/slide1_2.png" alt="Responsive" width="298" height="176" /></div>
                <div class="md-object" data-x="837" data-y="169" data-width="119" data-height="149" data-start="2200" data-stop="4800" data-easein="random" data-easeout="random" style=""><img src="content/images/ex/slide1_3.png" alt="Responsive" width="119" height="149" /></div>
                <div class="md-object" data-x="809" data-y="208" data-width="59" data-height="114" data-start="2800" data-stop="4500" data-easein="random" data-easeout="random" style=""><img src="content/images/ex/slide1_4.png" alt="Responsive" width="59" height="114" /></div>
            </div>
        </div>
        <div class="md-slide-item slide-2" data-timeout="4000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide2.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object slide-with-background" data-x="20" data-y="58" data-width="500" data-height="170" data-padding-top="30" data-padding-bottom="30" data-padding-left="35" data-padding-right="35" data-start="300" data-stop="3600" data-easein="random" data-easeout="keep">
                    <h2 class="rs slide-title">Invista sem custos e burocracia</h2>
                    <p class="rs slide-description2">Escolha um dos projetos para investimento disponíveis na plataforma.</p>
                </div>
            </div>
        </div>
    </div>
</div><!--end: #home-slider -->

<section id="sobre">
  <div class="container_12">
    <h1>Por que devo investir?</h1>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-level-up"></i>
        </div>
        <p>Selecionamos as melhores safras e apresentamos boas oportunidades de investimento, tudo isso em um ambiente 100% digital e seguro.</p>
      </div>
    </div>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-money"></i>
        </div>
        <p>Faça uma reserva de investimentos com valores a partir de R$1.000,00 sem taxas e burocracia.</p>
      </div>
    </div>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-line-chart"></i>
        </div>
        <p>Receba periodicamente relatórios e no fim da safra os lucros do seu investimento diretamente em sua conta.</p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<div class="home-feature-category">
    <div class="container_12 clearfix">
        <?php  

        $investimento_query = "SELECT id, nome_plantacao, nome_agricultor, texto, thumb_plantacao, numero_investidores, total_arrecadado, total_dias, valorInvestimento, txt_resumo FROM investimento 
                                WHERE total_arrecadado = (SELECT MAX(total_arrecadado) from investimento)";

        $resultado_query = mysqli_query($conexao,$investimento_query)
                        or die (mysqli_error());

        if(@mysql_num_rows == '0'){
            echo "Não há nenhum investimento cadastrado";
        }
        else{

            $fetch = mysqli_fetch_array($resultado_query);

            $id_investimento = $fetch[0];
            $nome_plantacao = $fetch[1];
            $nome_agricultor = $fetch[2];
            $texto = $fetch[3];
            $thumb_plantacao = $fetch[4];
            $numero_investidores = $fetch[5];
            $total_arrecadado = $fetch[6];
            $total_dias = $fetch[7];
            $valorInvestimento = $fetch[8];
            $resumo = $fetch[9]; 

            $porcentagem = ($total_arrecadado/$valorInvestimento) *100;
        }

        ?>
        <div class="grid_12 marked-category">
            <div class="wrap-title clearfix">
                <h2 class="title-mark rs">Melhor investimento da Semana: <span class="fc-orange"><?php echo $nome_plantacao;  ?></span></h2>
            </div>
            <div class="box-marked-project project-short">
                <div class="top-project-info">
                    <div class="content-info-short clearfix">
                        <a href="#" class="thumb-img">
                            <img src="content/images/ex/th-292x204-1.jpg" alt="$TITLE">
                        </a>
                        <div class="wrap-short-detail">
                            <h3 class="rs acticle-title"><a class="be-fc-orange" href=""></a></h3>
                            <p class="rs tiny-desc">de <a href="" class="fw-b fc-gray be-fc-orange"><?php echo $nome_agricultor; ?></a>
                            <p class="rs title-description"><?php echo $resumo; ?></p>
                        </div>
                    </div>
                </div><!--end: .top-project-info -->
                <div class="bottom-project-info clearfix">
                    <div class="project-progress sys_circle_progress" data-percent="<?php echo number_format($porcentagem, 1); ?>">
                        <div class="sys_holder_sector"></div>
                    </div>
                    <div class="group-fee clearfix">
                        <div class="fee-item">
                            <p class="rs lbl">Investidores</p>
                            <span class="val"><?php echo $numero_investidores ?></span>
                        </div>
                        <div class="sep"></div>
                        <div class="fee-item">
                            <p class="rs lbl">Necessário</p>
                            <span class="val">R$<?php echo number_format($valorInvestimento, 2, ',', '.'); ?></span>
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
        </div><!--end: .marked-category -->
        <div class="clear"></div>
    </div>
</div><!--end: .home-feature-category -->
<div class="additional-info-line">
    <div class="container_12">
        <div class="grid_9">
            <h2 class="rs title">Não quer perder nenhuma novidade e ficar sempre por dentro das notícias?</h2>
            <p class="rs description">Então assine nossa Newsletter e recebe novidades de todos os novos investimentos na íntegra!</p>
        </div>
<<<<<<< HEAD
    </div>
</div><!--end: .home-popular-project -->
=======
        <div class="grid_3 ta-r">
            <a class="btn bigger btn-red" href="#">Receber informativo</a>
        </div>
        <div class="clear"></div>
    </div>
</div><!--end: .additional-info-line -->
>>>>>>> 0898db926f811bf800f451f7f2fc7481e17e9bb9
<?php include("componentes/footer.php") ?>
