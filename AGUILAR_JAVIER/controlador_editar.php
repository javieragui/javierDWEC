<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $bd1 = "bd1";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $bd1);
      //test_input lismpiamos codigo
    $id = $_POST['idNew'];

    //Variable que edita un campo seleccionado.
    $sql = "UPDATE tb_libros SET titulo = '$_POST[tituloNew]',
    autor = '$_POST[autorNew]', genero = '$_POST[generoNew]',
    precio = $_POST[precioNew] where $id=id";

    echo $sql;
    if ($conn->query($sql)=== TRUE) {

      header('Location: index.php');

    }else{
      header('Location: index.php');
    }

  ?>
