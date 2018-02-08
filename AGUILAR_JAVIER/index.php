<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <?php
      //Datos de la base de datos
      $servername = "localhost";
      $username = "root";
      $password = "aguilar1234";
      $bd1 = "bd1";
      // Crear conexion con la base de datos
      $conn = new mysqli($servername, $username, $password, $bd1);
      session_start();
      if (isset($_SESSION['usuario'])) {
      // variable que guarda la sentencia sql para mostrar los datos de la tabla bd1
       $sql = "SELECT * FROM tb_libros";
       // Guarda el resultado de la sentencia sql ejecutada en una variable
       $result = $conn->query($sql);
       // Mientras que el resultado tenga mas de 0 lineas se mostrarán los siguientes datos
      if ($result->num_rows > 0) {?>

      <th>Titulo</th><th>Autor</th><th>Genero</th><th>Precio</th><th>Borrar</th><th>Editar</th>

      <?php while($row = $result->fetch_assoc()) { ?>
        <tr>

           <td><?php echo $row["titulo"]; ?></td>
           <td><?php echo $row["autor"]; ?></td>
           <td><?php echo $row["genero"]; ?></td>
           <td><?php echo $row["precio"]. " €"; ?></td>
           <td><a href="controlador_baja.php?id=<?php echo $row["id"] ;?>">
           <input class="borrar" type="button" value="x"></a></td>
           <td><a href="edicion.php?id=<?php echo $row["id"] ;?>">
           <input class="editar" type="button" value="Ed"></a></td>

         </tr>
         <a href="altas.php"><button type="button" name="buttnuevo">Nuevo</button></a>
       <?php } }else {
               echo "0 results";
              }
            }else {
              include('pantalla_login.php');
            } ?>
    </table>
  </body>
</html>
