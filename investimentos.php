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
    <div class="container_12">
        <div class="content grid_9">
            <div class="search-result-page">
                <div class="top-lbl-val">
                    <h2 class="common-title"><span class="fc-orange">Investimentos</span></h2>
                    <div class="count-result">
                        <span class="fw-b fc-black">
                        <?php 
                            $investimento_query = "SELECT * FROM investimento";
                            $resultado_query = mysqli_query($conexao,$investimento_query)
                                                or die (mysqli_error());

                            $num_rows = mysqli_num_rows($resultado_query);

                            if($investimento_query == '0'){
                                echo "Não há nenhum investimento cadastrado";
                            }
                            
                            echo "$num_rows";
                        ?>
        
                        </span> projetos abertos
                    </div>
                </div>
                <div class="list-project-in-category">
                        <div id="list-search-ajax" class="list-project-result">
                            <?php include "subPages/listaProjetos.php"; ?>
                        </div>    
                        <div class="clear"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
                <!-- <p class="rs ta-c">
                    <a id="showmoreproject" class="btn btn-black btn-load-more" href="#">Show more projects</a>
                </p> -->
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
        <div class="clear"></div>
    </div>
<?php include "componentes/footer.php"; ?>