<?php session_start(); ?>
<?php include "componentes/header.php"; ?>

    <script type="text/javascript">
        function loginInvestimento() {
            setTimeout("window.location='login.php'", 100);
        }
    </script>
    <?php  
        if (isset($_GET['tmpId'])){
            $tmpId = $_GET['tmpId'];
            $tmpId = intval($tmpId);
            $investimento_query = "SELECT   ValorInvestimento, total_arrecadado, id FROM investimento where id = $tmpId";
            $resultado_query = mysqli_query($conexao, $investimento_query)
                                or die (mysqli_error());

            $fetch = mysqli_fetch_array($resultado_query);
            $valorInvestimento = $fetch[0];
            $valor_investido = $fetch[1];
            $id = $fetch[2];


            $valMin = intval($valorInvestimento)*0.1;
            $valorRestante = intval($valorInvestimento) - intval($valor_investido);

            if ($valMin >= $valorRestante) {
                $valMin = $valorRestante;
            }
        }
        else
            $tmpId = null;
        

        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
            echo "<script>loginInvestimento();</script>";
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
            <div class="single-page">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Formulário de investimento</h2>
                    <div class="box-white">
                        <form id="contact-form" class="clearfix" action="scripts/mail/sendmailInvestir.php?tmpId=<?php echo $id  ?>" method="POST">
                            <div class="form form-post-comment">
                                <div class="row-item clearfix">
                                    <label for="txt_email_contact">
                                        <input id="txt_email_contact" type="email" name="email" class="txt fill-width txt-email" placeholder="Insira seu e-mail"/>
                                    </label>
                                </div>
                                <p class="rs pb30">Você pode investir ainda R$<?php echo number_format($valMin, 2, ',', '.'); ?> ou R$<?php echo number_format($valorRestante, 2, ',', '.');  ?> </p>
                                <div class="row-item clearfix">
                                    <label for="txt_valor_contact">
                                        <input id="txt_valor_contact" type="number" min="<?php echo $valMin?>" max="<?php echo $valorRestante?>" name="valor" class="txt fill-width txt-name" placeholder="Valor"/>
                                    </label>
                                </div>
                                <div class="row-item clearfix">
                                    <label for="txt_content_contact">
                                        <textarea name="message" id="txt_content_contact" cols="30" name="observacoes" rows="10" class="txt fill-width" placeholder="Observações"></textarea>
                                    </label>
                                </div>
                                <div class="row-item clearfix">
                                    <label class="lbl" for="">Imagem do comprovante:</label>
                                    <div class="val">
                                        <input type="file" name="arquivo" accept="image/jpeg">
                                    </div>
                                </div>
                                <p class="rs pb30">Após aprovação da transferência, notificaremos você por e-mail dizendo que seu investimento foi aprovado.</p>
                                <div class="clear"></div>

                                <p class="rs ta-r clearfix">
									<span id="response"></span>
                                  
                                        <input type="submit" class="btn btn-white btn-submit-comment" value="Enviar">
                                    
                                   
                               </p>
                            </div>
                        </form>
                    </div>
                </div><!--end: .box-list-comment -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray">
                <h3 class="title-box">Contato direto</h3>
                <p class="rs description pb20">Caso queira tirar alguma dúvida por telefone ou pessoalmente, ligue para nós diretamente e agende uma conversa com um dos nossos representantes.</p>
                <p class="rs pb20">
                    <span class="fw-b">Localização</span>: Av. Lins de Vasconcelos, 1222
                </p>
                <p class="rs pb20">
                    <span class="fw-b">Telefone</span>: (11) 97370-1407
                </p>
                <p class="rs pb20">
                    <span class="fw-b">E-mail</span>: <a href="mailto:gustavoaoshiro@gmail.com" class="be-fc-orange">info@uplant.com</a>
                </p>
            </div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>

<?php include "componentes/footer.php"; ?>	


<?php 
} // final validação login


?>