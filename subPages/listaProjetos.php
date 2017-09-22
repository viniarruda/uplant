<?php
    
    $investimento_query = "SELECT id, nome_plantacao, nome_agricultor, texto, thumb_plantacao, numero_investidores, total_arrecadado, total_dias, valorInvestimento, txt_resumo FROM investimento ORDER BY id desc";
    $resultado_query = mysqli_query($conexao,$investimento_query)
                        or die (mysqli_error());

    if(@mysql_num_rows == '0'){
        echo "Não há nenhum investimento cadastrado";
    }
    else{

    while ($fetch = mysqli_fetch_array($resultado_query)){

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

        if (empty($numero_investidores)) {
            $numero_investidores = "Seja o primeiro";
        }
        $porcentagem = ($total_arrecadado/$valorInvestimento) *100;

?>
        <div class="project-short larger">
            <div class="top-project-info">
                <div class="content-info-short clearfix">
                    <a href="#" class="thumb-img">
                        <img src="content/images/plantacaoInvestimentos/<?php echo $thumb_plantacao; ?>.jpg" alt="$TITLE">
                    </a>
                    <div class="wrap-short-detail">
                        <h3 class="rs acticle-title">
                           <a class="be-fc-orange" href="#">Banana</a>
                        </h3>
                        <p class="rs tiny-desc">por <a href="#" class="fw-b fc-gray be-fc-orange"><?php echo $nome_agricultor; ?></a></p>
                        <p class="rs title-description"><?php echo $resumo; ?></p>
                    </div>
                </div>
            </div><!--end: .top-project-info -->
            <div class="bottom-project-info clearfix">
                <div class="project-progress sys_circle_progress" data-percent="<?php print number_format($porcentagem,1); ?>">
                    <div class="sys_holder_sector"></div>
                </div>
                <div class="group-fee clearfix">
                    <div class="fee-item">
                        <p class="rs lbl">Investidores</p>
                        <span class="val"><?php echo $numero_investidores; ?></span>
                    </div>
                    <div class="sep"></div>
                    <div class="fee-item">
                        <p class="rs lbl">Verba Necessária</p>
                        <span class="val">R$<?php echo $valorInvestimento; ?></span>
                    </div>
                    <div class="sep"></div>
                    <div class="fee-item">
                        <p class="rs lbl">Termina em</p>
                        <span class="val"> <?php echo $total_dias; ?> dias</span>
                    </div>
                </div>
                <form name="visualizarInvestimento" action="project.php?tmpId=<?php echo $id_investimento; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden"  name="id_investimento"  value="<?php echo $id_investimento; ?>"/>
                    <input class="btn btn-red btn-buck-project" type="submit" value="Invista" class="btn btn-red"/>
                </form>
                <div class="clear"></div>
            </div>
        </div><!--end: project-short item -->



<?php
        }
    }
?>
</div>