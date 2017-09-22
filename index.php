<?php session_start(); ?>
<?php include "componentes/header.php";?>
    <?php
        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
           ?> <script> $('.btn-login').css('display', 'inline-block');</script> <?php
        } else {
    ?>
    <script>
       $('.btn-login').css('display', 'none');
       $('.btn-cadastro').css('display', 'none');
       $('.btn-perfil').css('display', 'inline-block');
       $('.btn-logout').css('display', 'inline-block');
    </script>
    <?php } ?>
<div id="home-slider">
    <div class="md-slide-items md-slider" id="md-slider-1" data-thumb-width="105" data-thumb-height="70">
        <div class="md-slide-item slide-0" data-timeout="6000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide0.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="38" data-width="480" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="keep">
                    <p>Search Money for Your Creative Ideas?</p>
                </div>
                <div class="md-object rs slide-description" data-x="20" data-y="160" data-width="480" data-height="90" data-start="1400" data-stop="7500" data-easein="random" data-easeout="keep">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
                </div>
                <div class="md-object rs" data-x="20" data-y="260" data-width="120" data-height="23" data-padding-top="9" data-padding-bottom="7" data-padding-left="10" data-padding-right="10" data-start="1800" data-stop="7500" data-easein="random" data-easeout="keep">
                    <a href="#" class="btn btn-gray">Learn more</a>
                </div>
                <div class="md-object" data-x="495" data-y="0" data-width="612" data-height="365" data-start="1800" data-stop="7500" data-easein="fadeInRight" data-easeout="keep" style=""><img src="content/images/ex/th-slide-man.png" alt="Search Money for Your Creative Ideas" width="612" height="365" /></div>
            </div>
        </div>
        <div class="md-slide-item slide-1" data-timeout="6000">
            <div class="md-mainimg"><img src="content/images/ex/th-slide1.jpg" alt=""></div>
            <div class="md-objects">
                <div class="md-object rs slide-title" data-x="20" data-y="188" data-width="390" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="random">
                    <p>A creative engine</p>
                </div>
                <div class="md-object rs slide-description2" data-x="20" data-y="250" data-width="390" data-height="100" data-start="1400" data-stop="4500" data-easein="random" data-easeout="random">
                    <p>Mauris volutpat, lectus vitae pretium sagittis, turpis augue euismod libero</p>
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
                    <h2 class="rs slide-title">Start your project today</h2>
                    <p class="rs slide-description2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
                </div>
            </div>
        </div>
    </div>
</div><!--end: #home-slider -->
<div class="home-feature-category">
    <div class="container_12 clearfix">
        <div class="grid_12 marked-category">
            <div class="wrap-title clearfix">
                <h2 class="title-mark rs">Melhor investimento: <span class="fc-orange">Soja</span></h2>
            </div>
            <div class="box-marked-project project-short">
                <div class="top-project-info">
                    <div class="content-info-short clearfix">
                        <a href="#" class="thumb-img">
                            <img src="content/images/ex/th-292x204-1.jpg" alt="$TITLE">
                        </a>
                        <div class="wrap-short-detail">
                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="">LYK and Bear #1: No Food Deed Unpunished</a></h3>
                            <p class="rs tiny-desc">de <a href="" class="fw-b fc-gray be-fc-orange">Gustavo Oshiro</a>
                            <p class="rs title-description">Fazenda localizada no melhor lugar de Sorocaba, com boas colheiras e ótimo investimento</p>
                        </div>
                    </div>
                </div><!--end: .top-project-info -->
                <div class="bottom-project-info clearfix">
                    <div class="project-progress sys_circle_progress" data-percent="10">
                        <div class="sys_holder_sector"></div>
                    </div>
                    <div class="group-fee clearfix">
                        <div class="fee-item">
                            <p class="rs lbl">Investidores</p>
                            <span class="val">27</span>
                        </div>
                        <div class="sep"></div>
                        <div class="fee-item">
                            <p class="rs lbl">Necessário</p>
                            <span class="val">$38,000</span>
                        </div>
                        <div class="sep"></div>
                        <div class="fee-item">
                            <p class="rs lbl">Dias restantes</p>
                            <span class="val">25</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
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
            <div class="grid_3">
                <div class="project-short sml-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="content/images/ex/th-292x204-1.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="project.html">Soja</a></h3>
                                <p class="rs tiny-desc">by <a href="profile.html" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                <p class="rs project-location">
                                    <i class="icon iLocation"></i>
                                    New York, NY
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        <div class="line-progress">
                            <div class="bg-progress">
                                <span  style="width: 50%"></span>
                            </div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Funded</p>
                                <span class="val">50%</span>
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
                    </div>
                </div>
            </div><!--end: .grid_3 > .project-short-->
            <div class="grid_3">
                <div class="project-short sml-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="content/images/ex/th-192x135-1.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="project.html">Framboeza</a></h3>
                                <p class="rs tiny-desc">by <a href="profile.html" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                <p class="rs project-location">
                                    <i class="icon iLocation"></i>
                                    New York, NY
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        <div class="line-progress">
                            <div class="bg-progress">
                                <span class="success" style="width: 98%"></span>
                            </div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Funded</p>
                                <span class="val">98%</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Pledged</p>
                                <span class="val">$25,000</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Days Left</p>
                                <span class="val">18</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end: .grid_3 > .project-short-->
            <div class="clear clear-2col"></div>
            <div class="grid_3">
                <div class="project-short sml-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="content/images/ex/th-192x135-2.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="project.html">Project title</a></h3>
                                <p class="rs tiny-desc">by <a href="profile.html" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                <p class="rs project-location">
                                    <i class="icon iLocation"></i>
                                    New York, NY
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        <div class="line-progress">
                            <div class="bg-progress">
                                <span  style="width: 21%"></span>
                            </div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Funded</p>
                                <span class="val">21%</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Pledged</p>
                                <span class="val">$850K</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Days Left</p>
                                <span class="val">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end: .grid_3 > .project-short-->
            <div class="grid_3">
                <div class="project-short sml-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="content/images/ex/th-192x135-3.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="project.html">Project title</a></h3>
                                <p class="rs tiny-desc">by <a href="profile.html" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                <p class="rs project-location">
                                    <i class="icon iLocation"></i>
                                    New York, NY
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        <div class="line-progress">
                            <div class="bg-progress">
                                <span  style="width: 50%"></span>
                            </div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Funded</p>
                                <span class="val">50%</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Pledged</p>
                                <span class="val">$138,662</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Days Left</p>
                                <span class="val">44</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end: .grid_3 > .project-short-->
        </div>
    </div>
</div><!--end: .home-popular-project -->
<section id="sobre">
  <div class="container_12">
    <h1>Por que devo investir?</h1>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-level-up"></i>
        </div>
        <p>Vestibulum tristique, purus eget euismod vulputate, nisl erat suscipit mi!</p>
      </div>
    </div>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-money"></i>
        </div>
        <p>Vestibulum tristique, purus eget euismod vulputate, nisl erat suscipit mi!</p>
      </div>
    </div>
    <div class="grid_4">
      <div class="grid_sobre">
        <div class="sobre-item">
          <h2>Bom rendimento</h2>
          <i class="fa fa-line-chart"></i>
        </div>
        <p>Vestibulum tristique, purus eget euismod vulputate, nisl erat suscipit mi!</p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>
<?php include("componentes/footer.php") ?>
