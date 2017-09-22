<?php include 'componentes/header.php'; ?>
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Fale Conosco</h2>
                    <div class="box-white">
                        <form id="contact-form" class="clearfix" action="mail.php" method="post">
                             <p class="rs pb30">Você tem alguma dúvida ou sugestão e quer falar conosco? Então é simples!</p>
                            <div class="form form-post-comment">
                                <div class="left-input">
                                    <label for="txt_name_contact">
                                        <input id="txt_name_contact" type="text" name="nomeContato" class="txt fill-width txt-name" placeholder="Digite seu nome"/>
                                    </label>
                                    <label for="txt_email_contact">
                                        <input id="txt_email_contact" type="email" name="emailContato" class="txt fill-width txt-email" placeholder="Digite seu e-mail"/>
                                    </label>
                                </div>
                                <div class="right-input">
                                    <label for="txt_content_contact">
                                        <textarea name="mensagem" id="txt_content_contact" cols="30" rows="10" class="txt fill-width" placeholder="Digite sua mensagem"></textarea>
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
