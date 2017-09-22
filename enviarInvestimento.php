<?php include 'componentes/header.php'; ?>

    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Formulário de Criação de investimento</h2>
                    <div class="box-white">
                        <form id="contact-form" class="clearfix" action="scripts/mail/sendmailCriarInvestimento.php" method="POST" enctype="multipart/form-data">
                            <div class="form form-post-comment">
                            	<h2>Sobre você</h2>

                                <div class="left-input">
                                    <label for="nome">
                                        <input id="nomeAgricultor" type="nome" name="nomeAgricultor" class="txt fill-width txt-email" placeholder="Nome Completo" maxlength="100"/>
                                    </label>
                                </div>


                                <div class="right-input">
                                    <label for="txt_valor_contact">
                                        <input id="Nascimento" type="nascimento" name="nascimento" class="txt fill-width txt-name" placeholder="Nascimento"  onkeypress="mascaraData(this)" maxlength="10" style="padding: 14px 10px" />
                                    </label>
                                </div>


                                <div class="left-input">
                                    <label for="telefone">
                                        <input id="telefone" type="telefone" name="telefone" class="txt fill-width txt-email" placeholder="Telefone" maxlength="14"   onkeypress="mascaraTelefone(this)"/>
                                    </label>
                                </div>


                                <div class="right-input">
                                    <label for="CPF">
                                        <input id="RG" type="RG" name="RG" class="txt fill-width txt-email" placeholder="RG" maxlength="12" />
                                    </label>
                                </div>


                                <div class="left-input">
                                    <label for="CPF">
                                        <input id="CPF" type="CPF" name="CPF" class="txt fill-width txt-email" placeholder="CPF " onkeypress="mascaraCPF(this)" maxlength="13" />
                                    </label>
                                </div>
                                <div class="clear"></div>


                                <h2>Sobre o Projeto</h2>
                                <div class="left-input">
                                    <label for="nomeProjeto">
                                        <input id="nomeProjeto" type="nomeProjeto" name="nomeProjeto" class="txt fill-width txt-email" placeholder="Nome Projeto" maxlength="50"/>
                                    </label>
                                </div>


                                <div class="right-input">
                                    <label for="txt_valor_contact">
                                        <input id="dataInicio" type="dataInicio" name="dataInicio" class="txt fill-width txt-name" placeholder="Data prevista para iniciar projeto "  onkeypress="mascaraData(this)"  style="padding: 14px 10px" maxlength="10" /> 
                                    </label>
                                </div>


                                <label for="diasProjeto">
                                    <input id="diasProjeto" type="diasProjeto" name="diasProjeto" class="txt fill-width txt-name" placeholder="Quantidade de dias do projeto"  style="padding: 14px 10px" maxlength="10" /> 
                                </label>

                                <div style="padding-top: 30px;">
                                    <label for="txt_content_contact" >
                                        <input id="verba" type="verba" name="verba" class="txt fill-width txt-email" placeholder="Verba necessária" onKeyUp="mascaraMoeda(this, event)" maxlength="50" />
                                    </label>
                                </div>



                                <div style="padding-top: 30px;">
                                    <label for="txt_content_contact" >
                                        <textarea name="resumo" id="txt_content_contact" cols="30" name="observacoes" rows="10" class="txt fill-width" placeholder="Resuma seu projeto" maxlength="160"></textarea>
                                    </label>
                                </div>


                                <div style="padding-top: 30px; padding-bottom: 30px;">
                                    <label for="txt_content_contact" >
                                        <textarea name="detalhado" id="txt_content_contact" cols="30" name="observacoes" rows="10" class="txt fill-width" placeholder="Agora descreva detalhadamente em no máximo 500 caracteres" maxlength="500"></textarea>
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
					            <a href="" class="btn btn-red sys_show_popup_login">Termos de uso</a>


                                <div class="clear"></div>
                                <p class="rs pb30">Após analises da documentação e veracidade das informações, entraremos em contato.</p>

                                <p class="rs ta-r clearfix">
									<span id="response"></span>
                                   		<input type="submit"  class="btn btn-white btn-submit-comment" value="Enviar">
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
<?php include 'componentes/footer.php'; ?>