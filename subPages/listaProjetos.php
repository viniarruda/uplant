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
        if ($valorInvestimento == 0) 
            $porcentagem = 0;
        else
            $porcentagem = ($total_arrecadado/$valorInvestimento) *100;

?>
    <div class="grid_3">
        <div class="project-short sml-thumb">
            <div class="top-project-info">
                <div class="content-info-short clearfix">
                    <a href="#" class="thumb-img">
                        <img src="content/images/plantacaoInvestimentos/<?php echo $thumb_plantacao; ?>.jpg" alt="$TITLE">
                    </a>
                    <div class="wrap-short-detail">
                        <h3 class="rs acticle-title"><?php echo $nome_plantacao; ?></h3>
                        <p class="rs tiny-desc">por <?php echo $nome_agricultor; ?></p>
                        <p class="rs title-description"><?php echo $resumo; ?></p>
                        
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
                        <span class="val"><?php echo $numero_investidores; ?></span>
                    </div>
                    <div class="clear"></div>
                    <div class="sep"></div>
                    <div class="fee-item" style="margin-left: -15px;">
                        <p class="rs lbl">Verba Necessária</p>
                        <span class="val">R$<?php echo $valorInvestimento; ?></span>
                    </div>
                    <div class="clear"></div>
                    <div class="sep"></div>
                    <div class="fee-item" style="margin-left: -15px;">
                        <p class="rs lbl">Termina em</p>
                        <span class="val"><?php echo $total_dias; ?> dias</span>
                    </div>
                    <div class="sep"></div>
                    <div class="clear"></div>
                    <form name="visualizarInvestimento" action="project.php?tmpId=<?php echo $id_investimento; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden"  name="id_investimento"  value="<?php echo $id_investimento; ?>"/>
                        <input style="width: 100%; " type="submit" value="Invista" class="btn btn-red"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clear clear-2col"></div>
<?php
        }
    }
?>
