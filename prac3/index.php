<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
    button{
      height: 30px;
      width: 75px;
      background-color: red;
      color: white;
      font-weight: bold;
      border-radius: 15px;
    }
    table{
        border: 1px solid black;
        font-family:  Arial;
        text-align: center;
        background: linear-gradient(red, white);
        width: 500px;
        border-radius: 10px;
    }
    th{
        color: white;
      }
    .borrar, .editar{
      border-radius: 5px;
      background-color: red;
      color: white;
      font-weight: bold;
    }

    </style>
  </head>
  <body>
    <table>
  <?php
  //Datos de la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "aguilar1234";
  $informatica_bd = "informatica_bd";
  // Crear conexion con la base de datos
  $conn = new mysqli($servername, $username, $password, $informatica_bd);

   $sql = "SELECT * FROM components";
   $result = $conn->query($sql);

     if ($result->num_rows > 0) {?>

       <th>Nombre</th><th>Modelo</th><th>Capacidad</th><th>Precio</th><th>Borrar</th><th>Editar</th>

      <?php while($row = $result->fetch_assoc()) { ?>
         <tr>
    
           <td><?php echo $row["Nombre"]; ?></td>
           <td><?php echo $row["Modelo"]; ?></td>
           <td><?php echo $row["Capacidad"]; ?></td>
           <td><?php echo $row["Precio"]. " €"; ?></td>
           <td><a href="controlador_baja.php?Id=<?php echo $row["Id"] ;?>">
           <input class="borrar" type="button" value="x"></a></td>
           <td><a href="edicion.php?Id=<?php echo $row["Id"] ;?>">
           <input class="editar" type="button" value="Ed"></a></td>

         </tr>
       <?php } } ?>

    </table>
    <a href="altas.php"><button type="button" name="buttnuevo">Nuevo</button></a>

  </body>
</html>
