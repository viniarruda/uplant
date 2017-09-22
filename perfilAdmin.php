<?php session_start(); ?>
<?php
        include "componentes/header.php";

        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
            header("Location: login.php");
            exit;
        } else {
?>
    <script>
       $('.btn-login').css('display', 'none');
       $('.btn-cadastro').css('display', 'none');
       $('.btn-perfil').css('display', 'inline-block');
       $('.btn-logout').css('display', 'inline-block');
    </script>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li><a href="#">Conta</a></li>
                      <li><a href="#" class="be-fc-orange">Cadastrar Projeto</a></li>
                      <li  class="active"><a href="#" class="be-fc-orange">Projetos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Conta</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="content/images/ex/th-90x90-1.jpg" alt="$USER_NAME">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">Vinícius Arruda</a></h4>
                                                <p class="rs">São Paulo - SP</p>
                                                <p class="rs fc-gray pb10">5 Projetos</p>
                                                <p class="rs description">Biográfia</p>
                                                <div class="legenda_perfil">
                                                  <p class="rs legenda">CPF:</p>
                                                  <p class="rs cpf">12345678910</p>
                                                  <p class="rs legenda">Telefone:</p>
                                                  <p class="rs telefone">+55 11 1234-5678</p>
                                                  <p class="rs legenda">E-mail:</p>
                                                  <p class="rs email">uplant@teste.com.br</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label ">Cadastrar Projetos</h3>
                            <div class="tab-pane accordion-content">
                                <?php include "subPages/adminEditInvestimentos/cadastroInvestimento.php"; ?>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Criar Projeto</h3>
                            <div class="tabInvestimentos tab-pane accordion-content active">
                                <?php include "subPages/adminEditInvestimentos/listaInvestimentos.php"; ?>

                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label ">Cadastrar Projetos</h3>
                            <div class="tabCadastroInvestimentos tab-pane accordion-content">
                                <?php include "subPages/adminEditInvestimentos/editarInvestimentos.php"; ?>
                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Projects</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="content/images/ex/th-292x204-1.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="33">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="content/images/ex/th-292x204-2.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="65">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="content/images/ex/th-292x204-3.jpg" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="69">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">270</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$38,000</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">25</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                            </div><!--end: .tab-pane -->
                        </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Bem-Vindo</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="content/images/ex/th-90x90-1.jpg" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b"><?php $nome_usuario ?></a></h4>
                        <p class="rs">Chicago, IL</p>
                        <p class="rs fc-gray">5 projects</p>
                    </div>
                </div>
                <div class="author-action">
                    <!-- <a class="btn btn-red" href="#">Edit info</a> -->
                    <a class="btn btn-white" href="logout.php">Logout</a>
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
<?php        }
?>
<?php include "componentes/footer.php";?>
