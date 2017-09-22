
<div>
    <div class="form form-profile">
        
        <?php 
            //função para armazenamento de imagens
            include "scripts/alteraData.php";

            //clausula de form e botão
            if(isset($_POST['uploadInvestimentos']) && $_POST['uploadInvestimentos'] == 'cadastrar'){

                //declarando variáveis emputadas pelo usuário
                $img = $_FILES['thumb_plantacao'];
                $nomePlantacao = $_POST['nome_plantacao'];
                $nomeAgricultor = $_POST['nome_agricultor'];
                $valorInvestimento = $_POST['valor_investimento'];
                $txt = $_POST['texto'];
                $totalDias = $_POST['total_dias'];
                $resumo = $_POST['resumo'];

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
                    $query_select = "INSERT INTO investimento (nome_plantacao, nome_agricultor, total_arrecadado, texto, thumb_plantacao, data_inicio, nome_documento, total_dias, $resumo) VALUES ('$nomePlantacao','$nomeAgricultor', '$valorInvestimento', '$txt', '$name', '$data', '$novoNomeDocumento', '$totalDias'm '$txt_resumo' )";

                    $insert = mysqli_query($conexao, $query_select);

                    if($insert)
                        echo "<script language='javascript' type='text/javascript'>alert('Cadastro de investimento realizado com sucesso!');window.location.href='perfilAdmin.php'</script>";
                    else
                        echo "<script language='javascript' type='text/javascript'>alert('Cadastro de investimento não foi possível ser realizado!');window.location.href='perfilAdmin.php'</script>";
                }
                else
                        echo "<script language='javascript' type='text/javascript'>alert('Cadastro de investimento não foi possível ser realizado!');window.location.href='perfilAdmin.php'</script>";
          


            }
         ?>

        <form  name="uploadInvestimentos" action="" method="POST" enctype="multipart/form-data">
            
     <div class="row-item clearfix">
                <label class="lbl">Tipo de plantação:</label>
                <div class="val">
                    <input class="txt" type="text" name="nome_plantacao" id="nome_plantacao" maxlength="50">
                    <p class="rs description-input">Banana, café, framboesa...</p>
                </div>
            </div>

            <div class="row-item clearfix">
                <label class="lbl">Nome agricultor:</label>
                <div class="val">
                    <input class="txt" type="text" name="nome_agricultor" id="nome_agricultor"  maxlength="100">
                </div>
            </div>
          
            <div class="row-item clearfix">
                <label class="lbl">Data Final do investimento:</label>
                <div class="val">
                    <div class="container_12">                    
                        <input class="txt" type="text" name="data_inicio" onkeypress="mascaraData(this)" maxlength="10">
                    </div>
                </div>
            </div> 

            <div class="row-item clearfix">
                <label class="lbl">Total de dias de investimento:</label>
                <div class="val">
                    <div class="container_12">                    
                        <input class="txt" type="number" min="30" max="365" maxlength="3" name="total_dias" >
                    </div>
                </div>
            </div> 

            <div class="row-item clearfix">
                <label class="lbl">Verba Necessária (R$)</label>
                <div class="val">
                   <div class="layout-3cols">
                        <input class="txt" type="text"   name="valor_investimento" onKeyUp="mascaraMoeda(this, event)" maxlength="12" id="valor_investimento">
                   </div>
                </div>
            </div>

            <div class="row-item clearfix">
                <label for="txt_content_contact">
                    <textarea name="resumo" id="resumo" cols="20" rows="5"  maxlength="160" class="txt fill-width" placeholder="Resumo do investimento"></textarea>
                </label>
            </div>

            <div class="row-item clearfix">
                <label for="txt_content_contact">
                    <textarea name="texto" id="texto" cols="30" rows="10"  maxlength="500" class="txt fill-width" placeholder="Descrição da plantação"></textarea>
                </label>
            </div>

 
            <div class="row-item clearfix">
                <label class="lbl" for="">Imagem do terreno:</label>
                <div class="val">
                    <input type="file" name="thumb_plantacao" accept="image/jpeg">
                </div>
            </div>

            

            <div class="row-item clearfix">
                <label class="lbl" for="">Documentação:</label>
                <div class="val">
                    <input type="file" name="nome_documento" accept="application/pdf">
                </div>
            </div>
            
            <p class="wrap-btn-submit rs ta-r">
                <button class="btn btn-red btn-submit-all" type="submit" value="cadastrar" name="uploadInvestimentos">Salvar Investimento</button>
            </p>
        </form>
    </div>
</div><!--end: .tab-pane -->
