<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $informatica_bd = "informatica_bd";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $informatica_bd);

      $id = $_GET['Id'];
      //Variable que borra un campo seleccionado.
      $sql = "DELETE FROM components WHERE $id=Id";

      if ($conn->query($sql)=== TRUE) {

        header('Location: index.php');

      }else{
        header('Location: index.php');
      }

  ?>
