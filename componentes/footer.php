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
        <div class="grid_3 about-us">
            <h3 class="rs title">Uplant</h3>
            <p class="rs description">Startup brasileira focada em investimento Crowndfounding agropecuário. </p>
            <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">contato@uplant.com.br</a></p>
            <p class="rs">+55 11 1234-5678</p>
        </div><!--end: .contact-info -->
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
            <h3 class="rs title">Discover &amp; Create</h3>
            <div class="footer-menu">
                <ul class="rs">
                    <li><a class="be-fc-orange" href="#">What is Kickstars</a></li>
                    <li><a class="be-fc-orange" href="#">Start a project</a></li>
                    <li><a class="be-fc-orange" href="#">Project Guidlines</a></li>
                    <li><a class="be-fc-orange" href="#">Press</a></li>
                    <li><a class="be-fc-orange" href="#">Stats</a></li>
                </ul>
                <ul class="rs">
                    <li><a class="be-fc-orange" href="#">Staff Picks</a></li>
                    <li><a class="be-fc-orange" href="#">Popular</a></li>
                    <li><a class="be-fc-orange" href="#">Recent</a></li>
                    <li><a class="be-fc-orange" href="#">Small Projects</a></li>
                    <li><a class="be-fc-orange" href="#">Most Funded</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="copyright">
        <div class="container_12">
            <div class="grid_12">
                <a class="logo-footer" href="index.php"><img src="content/images/up-logo-header.png" alt="Logo Uplant"/></a>
                <p class="rs term-privacy">
                    <a class="fw-b be-fc-orange" href="single.html">Termos e Condições</a>
                    <span class="sep">/</span>
                    <a class="fw-b be-fc-orange" href="single.html">Política de privacidade</a>
                    <span class="sep">/</span>
                    <a class="fw-b be-fc-orange" href="#">FAQ</a>
                </p>
                <p class="rs ta-c fc-gray-dark site-copyright">Uplant - todos os direitos reservados. 2017 ® </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer><!--end: #footer -->

</div>
</body>
</html>
