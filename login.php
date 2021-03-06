<?php include "componentes/header.php"; ?>

<div class="container-login">
    <div class="container_12 clearfix">
        <div class="grid_6 grid_6_mobile">
            <div class="form login-form">
              <?php if(isset($_POST['cadastro']) && $_POST['cadastro'] == 'ok') {

                $email = $_POST['email'];
                $senha = $_POST['password'];
                $nome = $_POST['name'];
                // $cpf = $_POST['cpf'];

                $verificar_usuario = "SELECT email FROM users WHERE email = '$email' ";

                $query = mysqli_query($conexao, $verificar_usuario)
                         or die (mysqli_error());

                if( @mysqli_num_rows($query) >= '1' ) {
                  echo "<script language='javascript' type='text/javascript'>alert('Já existe um cadastro com esse e-mail');</script>";

                } else {
                  $cadastra_usuario = "INSERT INTO users (email, password, name) VALUES ('$email', '$senha', '$nome')";

                  $query_insert = mysqli_query($conexao, $cadastra_usuario);

                  if($query_insert) {
                    echo "<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');</script>";
                  } else {
                   echo "<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar usuário');</script>";
                  }
                }
              } ?>
                <form action="" name="cadastro" method="post" enctype="multipart/form-data">
                    <h3 class="rs title-form">Registrar</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">Novo na Uplant?</h4>
                        <p class="rs">Uma conta registrada é necessária para continuar.</p>
                        <div class="form-action">
                            <label for="txt_name">
                                <input id="txt_name" name="name" class="txt fill-width" type="text" required placeholder="Entre com seu nome completo"/>
                            </label>
                            <div class="wrap-2col clearfix">
                                <div class="col">
                                    <label for="txt_email">
                                        <input id="txt_email" class="txt fill-width" name="email" type="email" placeholder="Entre com seu e-mail" required />
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="txt_password">
                                        <input id="txt_password" name="password" class="txt fill-width" type="password" required placeholder="Entre com sua senha"/>
                                    </label>
                                </div>
                            </div>
                            <p class="rs ta-c">
                                <input type="hidden" name="cadastro" value="ok"/>
                                <input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-red btn-submit"/>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear clear-2col"></div>
        <div class="grid_6 grid_6_mobile">
            <div class="form login-form">
                <form action="user-authentication.php" method="post" name="login_form">
                    <h3 class="rs title-form">Login</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">Você já possui uma conta?</h4>
                        <p class="rs">Por favor entre para continuar.</p>
                        <div class="form-action">
                            <label for="inputEmail">
                                <input id="email" class="txt fill-width" name="email" type="email" placeholder="Entre com seu email"/>
                            </label>
                            <label for="inputPassword">
                                <input id="passwordLogin" class="txt fill-width" name="passwordLogin" type="password" placeholder="Entre com sua senha"/>
                            </label>
                            <p class="rs ta-c pb10">
                                <input type="submit" value="Entrar" class="btn btn-red btn-submit" />
                            </p>
                            <p class="rs ta-c">
                                <a href="#" class="fc-orange">Esqueci minha senha</a>
                            </p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("componentes/footer.php");?>
