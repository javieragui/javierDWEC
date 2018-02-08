<?php

	$mes = $_GET['a'];

	if($mes<1 || $mes>12){
		echo 'Error no hay un mes con ese numero!';
	}else{	

	switch($mes){
	case 1 :
		echo 'Enero';
		break;	
	case 2 :
		echo 'Febrero';
		break;
	case 3 :
		echo 'Marzo';
		break;
	case 4 :
		echo 'Abril';
		break;
	case 5 :
		echo 'Mayo';
		break;
	case 6 :
		echo 'Junio';
		break;
	case 7 :
		echo 'Julio';
		break;
	case 8 :
		echo 'Agosto';
		break;
	case 9 :
		echo 'Septiembre';
		break;
	case 10 :
		echo 'Octubre';
		break;
	case 11 :
		echo 'Noviembre';
		break;
	case 12 :
		echo 'Diciembre';
		break;
	}
}

?>
