<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      form{
        border: 1px solid black;
        width: 180px;
        margin: 5px;
        padding: 5px;
        border-radius: 15px;
        font-family:  Arial;
        text-align: center;
        background: linear-gradient(red, white);

      }
      button, .guardar{
        height: 30px;
        width: 75px;
        background-color: red;
        color: white;
        font-weight: bold;
        border-radius: 15px;
      }
    </style>
  </head>
  <body>
<!-- Hacemos un formulario para modificar la tabla. -->
<?php

  $id = $_GET['Id'];

  //Connectar a una Base de dates
  $servername = "localhost";
  $username = "root";
  $password = "aguilar1234";
  $informatica_bd = "informatica_bd";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $informatica_bd);

  $sql = "SELECT Id, Nombre, Modelo, Capacidad, Precio from components where Id = $id";

  // Guarda el resultado de la sentencia sql ejecutada en una variable
  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  ?>
<form action="controlador_editar.php" method="post">
  <input type="hidden" name="idNew" value="<?php echo $row["Id"]; ?>">
  <p>Nombre: </p><input type="text" name="nombreNew" value="<?php echo $row["Nombre"]; ?>">
  <p>Modelo: </p><input type="text" name="modeloNew" value="<?php echo $row["Modelo"]; ?>">
  <p>Capacidad: </p><input type="text" name="capacidadNew" value="<?php echo $row["Capacidad"]; ?>">
  <p>Precio: </p><input type="number" name="precioNew" value="<?php echo $row["Precio"]; ?>"><br>
  <br>

  <input type="submit" name="buttGuardar" value="Guardar" class="guardar">
  <a href="index.php"><button type="button" name="buttCancelar">Cancelar</button></a>

</form>

</body>
</html>
