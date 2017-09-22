<?php 

  function DeleteImage($thumb){
    chdir("content/images/plantacaoInvestimentos");
    $delete_img = unlink("$thumb");

  }

  function DeletePDF($pdf){
    chdir("../../documentos");
    $delete_pdf = unlink("$pdf");
  }
?>
