$(function(){

	$('#btnEditar').click( function() {
		alert("Passou por aqui");
		$('.tabInvestimentos').removeClass('active');
		$('.tabCadastroInvestimentos').addClass('active');
	});
});