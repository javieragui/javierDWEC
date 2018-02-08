<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Hacemos un formulario para modificar la tabla. -->
<?php

  $id = $_GET['id'];

  //Connectar a una Base de dates
  $servername = "localhost";
  $username = "root";
  $password = "aguilar1234";
  $bd1 = "bd1";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $bd1);

  $sql = "SELECT id, titulo, autor, genero, precio from tb_libros where id = $id";

  // Guarda el resultado de la sentencia sql ejecutada en una variable
  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  ?>
<form action="controlador_editar.php" method="post">
  <input type="hidden" name="idNew" value="<?php echo $row["id"]; ?>">
  <p>Titulo: </p><input type="text" name="tituloNew" value="<?php echo $row["titulo"]; ?>">
  <p>Autor: </p><input type="text" name="autorNew" value="<?php echo $row["autor"]; ?>">
  <p>Genero: </p><input type="text" name="generoNew" value="<?php echo $row["genero"]; ?>">
  <p>Precio: </p><input type="number" name="precioNew" value="<?php echo $row["precio"]; ?>"><br>
  <br>

  <input type="submit" name="buttGuardar" value="Guardar" class="guardar">
  <a href="index.php"><button type="button" name="buttCancelar">Cancelar</button></a>

</form>

  </body>
</html>
