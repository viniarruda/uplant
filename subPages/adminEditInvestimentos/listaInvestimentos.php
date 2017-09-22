
<?php
    require("scripts/funcao_delete.php");

    if(isset($_POST['excluir_investimento']) && $_POST['excluir_investimento'] == 'excluir'){
        $idExcluir = $_POST['id_investimento_excluir'];

        $imgExcluir = mysqli_query($conexao, "SELECT thumb_plantacao, nome_documento FROM investimento WHERE id = '$idExcluir'")
                    or die(mysqli_error());

        if(@mysqli_num_rows($imgExcluir) <= '0'){
            echo "Erro ao selecionar o investimento";
        }
        else {
            while ($resultadoExcluir = mysqli_fetch_array($imgExcluir)) {
                $thumb = $resultadoExcluir[0] . ".jpg";
                $pdf = $resultadoExcluir[1] . ".pdf";

                // deletar imagem
                DeleteImage($thumb);

                // deletar pdf
                DeletePDF($pdf);
               
                $delete_query =  mysqli_query($conexao, "DELETE FROM investimento WHERE id = '$idExcluir'")
                    or die(mysqli_error());

            }
        }

    }
    
    $investimento_query = "SELECT id, nome_plantacao, nome_agricultor, texto, thumb_plantacao, numero_investidores, total_arrecadado FROM investimento ORDER BY id desc";
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

?>


<div class="box-list-comment">
        <div class="media comment-item">
            <a href="#" class="thumb-left">
                <img src="content/images/plantacaoInvestimentos/<?php echo $thumb_plantacao; ?>.jpg" alt="$TITLE">
            </a>
            <div class="media-body">
                    <h4 class="rs comment-author">
                        <a href="#" class="be-fc-orange fw-b"><?php echo $nome_plantacao; ?></a>
                        <span class="fc-gray">por:</span>
                    </h4>
                    <p class="rs comment-content"><?php echo $nome_agricultor; ?></p>
                    <form name="editarPost" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" name="id_investimento_editar" value="<?php echo $id_investimento; ?>"/>
                        <input type="hidden" name="idInvestimentoEditar" value="editar" />
                        <input  id="btnEditar"  type="button" name="editar_investimento" value="Editar" class="btn btn-red"/>
                    </form>
                    <form name="excluirInvestimento" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_investimento_excluir" value="<?php echo $id_investimento; ?>"/>
                        <input type="hidden" name="excluir_investimento" value="excluir" />
                        <input type="submit" name="excluir" value="Excluir" class="btn btn-red"/>
                    </form>
            </div>

        </div>
</div>

<?php 
    }
}
 ?>