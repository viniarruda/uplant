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
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <div class="wrapper-box">
                    <h2 class="common-title">Quem somos</h2>
                         <p class="rs pb30">Investir no segmento agrícola é uma das mais tradicionais formas de rentabilização de patrimônio, e há inumeras formas de investimento neste setor. Entretanto, os maiores lucros do segmento agrícola sempre foram restritos ao grandes produtores rurais - grande latifundiarios, que aplicavam seus recursos em tecnologia e grandes safras. O Uplant é uma plataforma de investimento agrícola que quebra esse paradigma, utilizando conceito de crowdfunding para tornar estes investimentos acesíveis a todos e dar acesso aos pequenos produtores rurais, recursos financeiros para sua produção agrícola.</p>
                         <p class="rs pb30">Através do UPLANT, investidores podem participar de empreendimentos agerícolas de pequenos e médios produtores rurais previamente selecionados. A partir de R$1 mil, o investidor pode adquirir uma quota da produção, de forma 100% digital, sem burocracia e com alto potencial de retorno.</p>
                         <p class="rs pb30">Nós do UPLANT acreditamos que nenhum portfolio de investimentos está completo enquanto não possuir uma parcela alocada no segmento agrícola, e temos orgulho em oferecer um forma simplificada e rentável de investir neste mercado.</p>
                </div>
                <div class="wrapper-box">
                    <h1 class="title-equipe">Nossa equipe</h1>
                    <div class="card-equipe">
                        <img src="content/images/equipe/vinicius.jpg">
                        <p>Gabriel Souza</p>
                    </div>
                    <div class="card-equipe">
                        <img src="content/images/equipe/vinicius.jpg">
                        <p>Guilherme Souza</p>
                    </div>
                    <div class="card-equipe">
                        <img src="content/images/equipe/vinicius.jpg">
                        <p>Gustavo Oshiro</p>
                    </div>
                    <div class="card-equipe">
                        <img src="content/images/equipe/vinicius.jpg">
                        <p>Leonardo Ferreira</p>
                    </div>
                    <div class="card-equipe">
                        <img src="content/images/equipe/vinicius.jpg">
                        <p>Vinícius Arruda</p>
                    </div>
                </div>
            </div>
        </div><!--end: .content -->
        <div class="clear"></div>
    </div>
<?php include 'componentes/footer.php'; ?>
