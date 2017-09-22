// Telefone
function mascaraTelefone(campo,evento){
	var tecla = (!evento) ? window.event.keyCode : evento.which;
  	var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  	var resultado  = "";
  	var mascara = "(##) ####-#####".reverse();
  	for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    	if (mascara.charAt(x) != '#') {
      		resultado += mascara.charAt(x);
      		x++;
    	} else {
      		resultado += valor.charAt(y);
		    y++;
		    x++;
		}
  	}
  	
  	campo.value = resultado.reverse();
       
}

//CPF 
function mascaraCPF(campo,evento){
	var tecla = (!evento) ? window.event.keyCode : evento.which;
  	var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  	var resultado  = "";
  	var mascara = "###.###.###-##".reverse();
  	for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    	if (mascara.charAt(x) != '#') {
      		resultado += mascara.charAt(x);
      		x++;
    	} else {
      		resultado += valor.charAt(y);
		    y++;
		    x++;
		}
  	}
  	
  	campo.value = resultado.reverse();
       
}

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
    var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
    var resultado  = "";
    var mascara = "###.###,##".reverse();
    for (var x=0, y=0; x<mascara.length && y<valor.length;) {
      if (mascara.charAt(x) != '#') {
          resultado += mascara.charAt(x);
          x++;
      } else {
          resultado += valor.charAt(y);
        y++;
        x++;
    }
    }
    
    campo.value = resultado.reverse();
       
}

// Validando campo dinheiro

String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'');
  var resultado  = "";
  var mascara = "##.###.###,#".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    if (mascara.charAt(x) != '#') {
      resultado += mascara.charAt(x);
      x++;
    } else {
      resultado += valor.charAt(y);
      y++;
      x++;
    }
  }
  campo.value = resultado.reverse();
}


//Campo Data
function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}

