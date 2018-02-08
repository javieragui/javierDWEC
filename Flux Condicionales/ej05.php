<?php

	$num1= $_GET['a'];
	$num2= $_GET['b'];
	$signo= $_GET['s'];

	switch($signo){
	case 'sumar':
		$resultado = $num1 + $num2;
		echo $resultado;
		break;
	case 'restar':
		$resultado = $num1 - $num2;
		echo $resultado;
		break;
	case 'multiplicar':
		$resultado = $num1 * $num2;
		echo $resultado;
		break;
	case 'dividir':
		$resultado = $num1 / $num2;
		echo $resultado;
		break;
		}
	
?>
