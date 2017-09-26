<?php session_start(); ?>
<?php include "componentes/header.php";?>
    <?php
        if( !isset($_SESSION["email"]) || !isset($_SESSION["passwordLogin"]) ) {
           ?> <script> $('.btn-login').css('display', 'initial');</script> <?php
        } else {
    ?>
    <script>
       $('.btn-login').css('display', 'none');
       $('.btn-cadastro').css('display', 'none');
       $('.btn-perfil').css('display', 'initial');
       $('.btn-logout').css('display', 'initial');
    </script>
    <?php } ?>
    <?php 

        if (!isset($_SESSION["email"])) {
            $mail = null;
            $nome = null;
        }
        else{
            $mail = $_SESSION["email"];

            $query = "SELECT name from users where email = '$mail'";

            $resultado_query = mysqli_query($conexao, $query)
                                or die (mysqli_error());

            $fetch = mysqli_fetch_array($resultado_query);

            $nome = $fetch[0];
        }


     ?>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Fale Conosco</h2>
                    <div class="box-white">
                        <form id="contact-form" class="clearfix" action="mail.php" method="post">
                             <p class="rs pb30">Se você̂ não encontrar o que procura, veja mais em nossa seção de Dúvidas Frequentes, ou entre em contato com a gente! Nos mande uma mensagem preenchendo o formulário abaixo que entraremos em contato o mais breve possível.</p>
                            <div class="form form-post-comment">
                                <div class="left-input">
                                    <label for="txt_name_contact">
                                        <input id="txt_name_contact" type="text" value="<?php echo $nome; ?>" name="nomeContato" class="txt fill-width txt-name" placeholder="Digite seu nome"/>
                                    </label>
                                    <label for="txt_email_contact">
                                        <input id="txt_email_contact" type="email" value="<?php echo $mail; ?>" name="emailContato" class="txt fill-width txt-email" placeholder="Digite seu e-mail"/>
                                    </label>
                                </div>
                                <div class="right-input">
                                    <label for="txt_content_contact">
                                        <textarea name="mensagem" id="txt_content_contact"  cols="30" rows="10" class="txt fill-width" placeholder="Digite sua mensagem"></textarea>
                                    </label>
                                </div>
                                <div class="clear"></div>
                                <p class="rs ta-r clearfix">
									<span id="response"></span>

                                   <input type="submit" class="btn btn-white btn-submit-comment" value="Enviar">
                               </p>
                            </div>
                        </form>
                    </div>
                    <div class="box-white">
                        <h3 class="title-box">FAQ</h3>
                        <p class="rs description pb20"><span style="font-size:22px;font-weight: bold;color: #3CB371;">UPLANT</span></p>
                        <p class="rs pb20">
                            <span class="fw-b">O que é o Uplant?</span> A Uplant é uma plataforma 100% digital de investimentos coletivos, permitindo que pequenos e médios agricultores possam procurar investimentos de uma forma simples e eficaz e o investidor possa diversificar sua carteira.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">O que é crownfunding?</span> Crownfunding ou investimento coletivo, é uma forma de arrecadação de dinheiro, através da internet, para projetos de todo o tipo, seja ele: pequenos negócios, invenções, ONGs, filantropia, entre outros.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Quais as vantagens do investimento coletivo?</span> Ao investir coletivamente utilizando a plataforma Uplant, você participa de um mercado antes acessível apenas para grandes investidores. Através do investimento coletivo, o setor de agricultura, com muitas oportunidades, torna-sedisponível a todos.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Quais os critérios adotados para a seleção de safras a serem selecionadas para a plataforma?</span> Para aprovação de captação de recursos na nossa plataforma, o projeto será avaliado por engenheiros agrônomos com as informações fornecidas (condições do solo, aparato tecnológico, sementes, volume pluviométrico, clima da região, etc). Após a avaliação técnica, é instaurado um comitê de risco, visando que somente propostas rentáveis sejam aprovadas e disponibilizadas na nossa plataforma.
                        </p>
                        <p class="rs description pb20"><span style="font-size:22px;font-weight: bold;color: #3CB371;">Investimentos</span></p>
                        <p class="rs pb20">
                            <span class="fw-b">Quem pode investir?</span> Pessoas físicas e maiores de 18 anos podem investir em nossa plataforma.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Como funciona o investimento?</span> 
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Quanto posso investir?</span> O valor mínimo de investimento é de R$1000,00 e o valor máximo será limitado ao valor total do projeto.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Existem taxas a serem pagas para a Uplant?</span> Não existe nenhum tipo de taxa para os investidores na plataforma da Uplant.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Qual o retorno financeiro do investimento?</span> A rentabilidade irá variar de cada projeto, conforme fatores do plantio e variações do mercado. Cada projeto exibido na plataforma possui uma descrição e a expectativa de retorno com base no estudo do nosso comitê.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">O que acontece se o valor da captação do projeto não atingir a meta?</span> Caso o projeto não atinja a meta estabelecida, o valor investido ficará na formade crédito na plataforma para o investidor e a qualquer momento ele poderá solicitar o estorno do dinheiro para sua conta.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Qual o risco dos meus investimentos caso ocorra um problema com a safra?</span> Os investimentos são de alto risco e rentabilidade variada conforme a descrição de cada projeto. Aconselhamos que cada investidor avalie as informações fornecidas pelo autor do projeto e o risco envolvido em cada investimento
                        </p>
                        <p class="rs description pb20"><span style="font-size:22px;font-weight: bold;color: #3CB371;">Agricultor</span></p>
                        <p class="rs pb20">
                            <span class="fw-b">Como faço para captar na plataforma?</span> Basta acessar a nossa plataforma e preencher o formulário de contato ou basta acessar esse <a href="enviarInvestimento.php">link</a> e preencher as informações solicitadas no formulário. Entraremos em contato o mais breve possível.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Quando receberei o valor captado?</span> O valor captado só será repassado quando a meta de captação for atingida.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Posso investir na minha captação?</span> Para fazer o investimento na captação o agricultor deverá ter um perfil de investidor na plataforma.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">Posso ter mais de um projeto de captação ao mesmo tempo?</span> Sim, é possível possuir mais de um projeto disponível na plataforma para captação de recursos ao mesmo tempo.
                        </p>
                        <p class="rs pb20">
                            <span class="fw-b">O que acontece se meu projeto não atingir o valor alvo?</span> Os projetos publicados na plataforma Uplant funcionam na forma de “Tudo ou Nada”, logo, se o seu projeto não atingiu a meta dentro do prazo, você não receberá nenhum valor referente ao investimento.
                        </p>
                    </div>

                </div><!--end: .box-list-comment -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
             <div class="box-gray">
                <h3 class="title-box">Nossas informações</h3>
                <p class="rs description pb20">Caso queira tirar alguma dúvida por telefone ou pessoalmente, ligue para nós diretamente e agende uma conversa com um dos nossos representantes.</p>
                <p class="rs pb20">
                    <span class="fw-b">Endereço</span>: Av. Lins de Vasconcelos, 1222
                </p>
                <p class="rs pb20">
                    <span class="fw-b">Telefone</span>: +55 (11) 97370-1407
                </p>
                <p class="rs pb20">
                    <span class="fw-b">E-mail</span>: <a href="mailto:contato@uplant.com.br" class="be-fc-orange">contato@uplant.com.br</a>
                </p>
            </div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>

<?php include 'componentes/footer.php'; ?>
