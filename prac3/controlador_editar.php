<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $informatica_bd = "informatica_bd";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $informatica_bd);

    $id = $_POST['idNew'];

    //Variable que edita un campo seleccionado.
    $sql = "UPDATE components SET Nombre = '$_POST[nombreNew]',
    Modelo = '$_POST[modeloNew]', Capacidad = '$_POST[capacidadNew]',
    Precio = $_POST[precioNew] where $id=Id";

    echo $sql;
    if ($conn->query($sql)=== TRUE) {

      header('Location: index.php');

    }else{
      header('Location: index.php');
    }

  ?>
