<?php
    session_start();
    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $informatica_bd = "informatica_bd";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $informatica_bd);

    $usuario = $_POST["usu"];
    $password = $_POST["pass"];

    


?>
