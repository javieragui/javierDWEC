<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $informatica_bd = "informatica_bd";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $informatica_bd);
    //Datos que añadimos codiendolos del formulario (altas.php1)

      $nombre = $_POST["nombre"];
      $modelo = $_POST["modelo"];
      $capacidad = $_POST["capacidad"];
      $precio = $_POST["precio"];

    // // variable que guarda la sentencia para insertar los datos
    $sql = "INSERT INTO components ( Nombre, Modelo, Capacidad, Precio)
    VALUES ('$nombre', '$modelo', '$capacidad', $precio)";

    if ($conn->query($sql)=== TRUE) {

      header('Location: index.php');

    }else{
      header('Location: index.php');
    }


?>
