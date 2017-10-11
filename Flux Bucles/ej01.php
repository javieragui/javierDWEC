<?php

	$var=$_GET['a'];
	
	echo 'Tabla de multiplicar del '. $var ."<br>";	
	echo "<br>";

	for($i=0; $i<=10; $i++){

		echo "$var  *  $i  = ". ($var*$i). "<br>";
	}

?>
