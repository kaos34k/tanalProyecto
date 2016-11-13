<?php 
		
	if ($_REQUEST) {
		return validarEdad();
	} 


	function validarEdad (){
        $dia = $_REQUEST["dia"]; 
        $mes = $_REQUEST["mes"]; 
        $anio = $_REQUEST["anio"]; 
         
        $edad = calculaedad( $anio, $mes, $dia  );
     	if( $edad >= 18 ){
     		$edadValida = true;
     		$url = "url_del_sitio?parametroQueValidaLaEdad=".$edadValida; // usa este parametro dentro de la pagina en caso de ser necesario
     		echo $url;
        } else if ($edad < 18 ){
        	$msm = "No eres mayor de 18 años por favor espera a ser mayor para ver este sitio y todo el porno que quieras";
    		$url = "url_del_sitio?msm=".$msm;//puede ser este mismo index solo con un parametro de mensaje que diga que la edad no es valida
     		echo $url;
        }
	}
     
    function calculaedad( $y, $mes, $dia  ){
        $fechaUser = $y."-".$mes."-".$dia;
		$fecha = time() - strtotime($fechaUser);
		$edad = floor((($fecha / 3600) / 24) / 360);
        return $edad;
    }


 ?>