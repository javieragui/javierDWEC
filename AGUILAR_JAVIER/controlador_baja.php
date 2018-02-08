<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $bd1 = "bd1";

    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $bd1);
      $id = $_GET['id'];
      //Variable que borra un campo seleccionado.
      $sql = "DELETE FROM tb_libros WHERE $id=id";

      if ($conn->query($sql)=== TRUE) {

        header('Location: index.php');

      }else{
        header('Location: index.php');
      }

  ?>
