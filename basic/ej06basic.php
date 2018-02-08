<?php
	$n = $_GET['nom'];
	$a = $_GET['apellido'];
	$e = $_GET['edad'];
?>

<table>
	
	<tr>
		<th>Nombre</th>
		<td><?php echo $n; ?></td>
	</tr>
	<tr>
		<th>Apellido</th>
		<td><?php echo $a; ?></td>
	</tr>
	<tr>
		<th>Edad</th>
		<td><?php echo $e; ?></td>
	</tr>
</table>
