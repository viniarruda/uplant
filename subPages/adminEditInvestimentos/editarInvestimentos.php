
<div>
    <div class="form form-profile">
        <?php 
            //clausula de form e botão
            if(isset($_POST['uploadInvestimentos']) && $_POST['uploadInvestimentos'] == 'cadastrar'){

                //declarando variáveis emputadas pelo usuário
                $img = $_FILES['thumb_plantacao'];
                $nomePlantacao = $_POST['nome_plantacao'];
                $nomeAgricultor = $_POST['nome_agricultor'];
                $valorInvestimento = $_POST['valor_investimento'];
                $txt = $_POST['texto'];

                //pasta no qual será incluso imagens de investimento
                $pasta = "content/images/plantacaoInvestimentos/";
                $imgPermitida = array('image/jpg', 'image/jpeg', 'image/pjpeg');

                //chamando função que realiza upload de imagens
                require("scripts/funcao_upload.php");
                $nome = $img['name']; 
                $tmp = $img['tmp_name'];
                $type = $img['type'];

                //query para receber numero de id para incremento no nome do pdf
                $recebeQueryImagem = "SELECT id FROM investimento ORDER BY id desc LIMIT 1";
                $resultado_query = mysqli_query($conexao,$recebeQueryImagem)
                                or die (mysqli_error());

                $fetch = mysqli_fetch_array($resultado_query);
                $recebe = $fetch[0];
                $conversao = intval($recebe)+1;

                //realizando upload de arquivos pdf
                $extensao = strtolower(substr($_FILES['nome_documento']['name'], -4));
                $novoNomeDocumento =  strval($conversao) . ".pdf";
                $diretorio = "content/documentos/";
                move_uploaded_file($_FILES['nome_documento']['tmp_name'], $diretorio.$novoNomeDocumento);
                      

                if(!empty($nome) && in_array($type, $imgPermitida)){

                    $name = strval($conversao) . ".jpg";
                    Redimensionar($tmp, $name, 500, $pasta);

                    $data = muda_data($_POST['data_inicio']);
                    $query_select = "UPDATE investimento SET nome_plantacao = [$nomePlantacao], nome_agricultor = [$nomeAgricultor], texto = [$txt], WHERE id = '$id_investimento'";

                    $insert = mysqli_query($conexao, $query_select);

                    if($insert)
                        echo "<script language='javascript' type='text/javascript'>alert('Alteração de investimento realizado com sucesso!');window.location.href='perfilAdmin.php'</script>";
                    else
                        echo "<script language='javascript' type='text/javascript'>alert('Alteração xxx de investimento não foi possível ser realizado!');window.location.href='perfilAdmin.php'</script>";
                }
                else
                        echo "<script language='javascript' type='text/javascript'>alert('Alteração de investimento não foi possível ser realizado!');window.location.href='perfilAdmin.php'</script>";
          


            }


            

            $mysqli_query = "SELECT nome_plantacao, nome_agricultor, texto, thumb_plantacao, numero_investidores, total_arrecadado, nome_documento, data_inicio, total_dias from investimento WHERE id = '$id_investimento'";
                            
            $resultado_query = mysqli_query($conexao, $mysqli_query)
                        or die (mysqli_error());

            if(@mysqli_num_rows($resultado_query) <= 0){
                echo "Não foi encontrado nenhum dado de edição para estes investimento";
            }
            else{
            while ($fetch = mysqli_fetch_array($resultado_query)){

                $edtnome_platacao = $fetch[0];
                $edtNome_agricultor = $fetch[1];
                $edtTexto = $fetch[2];
                $edtThumb_plantacao = $fetch[3];
                $edtNumero_investidores = $fetch[4];
                $edtTotal_arrecadado = $fetch[5];
                $edtNome_documento = $fetch[6];
                $edtData_inicio = $fetch[7];
                $edtTotal_dias = $fetch[8];
            
            ?>
        <form  name="uploadInvestimentos" action="" method="POST" enctype="multipart/form-data">

         <div class="row-item clearfix">
                <label class="lbl">Tipo de plantação:</label>
                <div class="val">
                        <input class="txt" type="text" name="nome_plantacao" value="<?php echo $edtnome_platacao; ?>" id="nome_plantacao">
                        <p class="rs description-input">Banana, café, framboesa...</p>
                    </div>
                </div>

                <div class="row-item clearfix">
                    <label class="lbl">Nome agricultor:</label>
                    <div class="val">
                        <input class="txt" type="text" name="nome_agricultor" value="<?php echo $edtNome_agricultor; ?>" id="nome_agricultor">
                    </div>
                </div>
              
                <div class="row-item clearfix">
                    <label class="lbl">Dias para investimento:</label>
                    <div class="val">
                        <div class="container_12">                    
                            <input type="text" name="data_inicio" value="<?php echo $edtData_inicio; ?>" id="datepicker">
                        </div>
                    </div>
                </div> 

                <div class="row-item clearfix">
                    <label class="lbl">Verba Necessária</label>
                    <div class="val">
                       <div class="layout-3cols">
                            <input class="txt" type="text" name="valor_investimento" value="<?php echo $edtTotal_arrecadado; ?>" id="valor_investimento">
                       </div>
                    </div>
                </div>

                <div class="row-item clearfix">
                    <label for="txt_content_contact">
                        <textarea name="texto" id="texto" cols="30" rows="10" class="txt fill-width" placeholder="Descrição da plantação">
                            <?php echo $texto; ?>
                        </textarea>
                    </label>
                </div>

     
                <div class="row-item clearfix">
                    <label class="lbl" for="">Imagem do terreno:</label>
                    <div class="val">
                        <input type="file" name="thumb_plantacao" value="<?php echo $edtThumb_plantacao; ?>" accept="image/jpeg">
                        <p class="rs description-input">Apenas se desejar alteração de imagem</p>
                    </div>
                </div>

                

                <div class="row-item clearfix">
                    <label class="lbl" for="">Documentação:</label>
                    <div class="val">
                        <input type="file" name="nome_documento" value="<?php echo $edtNome_documento; ?>" accept="application/pdf">
                        <p class="rs description-input">Apenas se desejar alteração de documento</p>
                    </div>
                </div>
                
                
            <p class="wrap-btn-submit rs ta-r">
                <button class="btn btn-red btn-submit-all" type="submit" value="cadastrar" name="uploadInvestimentos">Salvar Investimento</button>
            </p>

            </form>
<?php 
        }
    }
 ?>
    </div>
</div><!--end: .tab-pane -->
