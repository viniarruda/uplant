<?php

     // $hostname_config = "localhost";
     // $database_config = "uplant";
     // $username_config = "root";
     // $password_config = "";

    $hostname_config = "mysql552.umbler.com";
 	$database_config = "uplant";
 	$username_config = "uplant_adm";
 	$password_config = "uplant#17";


    $conexao = mysqli_connect("$hostname_config","$username_config","$password_config","$database_config")
                or die (mysqli_error());
    //quando subir, trocar o localhost pelo endereço do servidor
    //root é o usuário, quando subir, alterar pelo usuário do banco
    // terceiro é a senha
    //uplant é o nome do banco

?>
<?php if(isset($_POST['newsletter']) && $_POST['newsletter'] == 'pronto') {

    $emailNews = $_POST['emailNews'];

    $verificar_newsletter = "SELECT emailNews FROM newsletter WHERE emailNews = '$emailNews' ";

    $query = mysqli_query($conexao, $verificar_newsletter)
             or die (mysqli_error());

    if( @mysqli_num_rows($query) >= '1' ) {
      echo "<script language='javascript' type='text/javascript'>alert('E-mail já cadastrado');</script>";

    } else {
      $cadastra_newsletter = "INSERT INTO newsletter (emailNews) VALUES ('$emailNews')";

      $query_insert = mysqli_query($conexao, $cadastra_newsletter);

      if($query_insert) {
        echo "<script language='javascript' type='text/javascript'>alert('E-mail já cadastrado');</script>";
      } else {
       echo "<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar e-mail');</script>";
      }
    }
} ?>

<footer id="footer">
<div class="container_12 main-footer">
        <div class="grid_12 about-us" style="margin-bottom: 30px">
            <h3 class="rs title">Uplant</h3>
            <p class="rs description">Startup brasileira focada em investimento Crowndfounding agropecuário. </p>
            <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">contato@uplant.com.br</a></p>
            <p class="rs">+55 11 1234-5678</p>
        </div>
        <div class="clear clear-2col"></div>
        <div class="grid_3 email-newsletter">
            <h3 class="rs title">Newsletter</h3>
            <div class="inner">
                <p class="rs description">Fique por dentro das nossas novidades.</p>
                <form action="#" name="newsletter" method="post" enctype="multipart/form-data">
                    <div class="form form-email">
                        <label class="lbl" for="txt-email">
                            <input id="txt-email" type="text" name="emailNews" class="txt fill-width" placeholder="Digite seu e-mail"/>
                        </label>
                        <input type="hidden" name="newsletter" value="pronto"/>
                        <input type="submit" name="enviar" value="Enviar" class="btn btn-green"/>
                    </div>
                </form>
            </div>
        </div><!--end: .email-newsletter -->
        <div class="grid_6">
            <h3 class="rs title">Menu</h3>
            <div class="footer-menu">
                <ul class="rs">
                    <li><a class="be-fc-orange" href="investimentos.php">Investimentos</a></li>
                    <li><a class="be-fc-orange" href="enviarInvestimento.php">Sou agricultor</a></li>
                    <li><a class="be-fc-orange" href="contato.php">Contato</a></li>
                </ul>
                <ul class="rs">
                    <li><a class="be-fc-orange" href="#">Facebook</a></li>
                    <li><a class="be-fc-orange" href="#">Youtube</a></li>
                    <li><a class="be-fc-orange" href="mailto:contato@uplant.com.br">E-mail</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    <div class="copyright">
        <div class="container_12">
            <div class="grid_12">
                <p class="rs ta-c fc-gray-dark " style="text-align: left">Uplant - todos os direitos reservados. 2017® </p>
                <p class="rs term-privacy">
                    <a class="fw-b be-fc-orange" href="TermosUso.html">Termos e Condições</a>
                    <span class="sep">/</span>
                    <a class="fw-b be-fc-orange" href="politicaPrivacidade.html">Política de privacidade</a>
                    <span class="sep">/</span>
                    <a class="fw-b be-fc-orange" href="#">FAQ</a>
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer><!--end: #footer -->

</div>

<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
      .then(function () {
        console.log('service worker registered');
      })
      .catch(function () {
        console.warn('service worker failed');
      });
  }
</script>
<script>
$(function() {
    $("#calendario").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
</script>

</body>
</html>
