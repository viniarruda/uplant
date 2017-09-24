<footer id="footer">
<!--     <div class="container_12 main-footer">
        <div class="grid_12 about-us" style="margin-bottom: 30px">
            <h3 class="rs title">Uplant</h3>
            <p class="rs description">Startup brasileira focada em investimento Crowndfounding agropecuário. </p>
            <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">contato@uplant.com.br</a></p>
            <p class="rs">+55 11 1234-5678</p>
        </div><!--end: .contact-info -->
   <!--      <div class="clear clear-2col"></div>
        <div class="clear"></div>
    </div> --> 
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
