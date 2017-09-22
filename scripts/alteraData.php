 <?php   
  function muda_data($dt)
    {
        $dia = substr($dt,0,2);
        $mes = substr($dt,3,2);
        $ano = substr($dt,6,4);
        $data = $ano."-".$mes."-".$dia;
        return $data;
    }
 ?>
