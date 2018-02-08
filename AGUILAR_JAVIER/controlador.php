<?php

    //Datos de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "aguilar1234";
    $bd1 = "bd1";
    // Crear conexion con la base de datos
    $conn = new mysqli($servername, $username, $password, $bd1);
    //Datos que añadimos codiendolos del formulario (altas.php)

      $titulo = $_POST["titulo"];
      $autor = $_POST["autor"];
      $genero = $_POST["genero"];
      $precio = $_POST["precio"];

      // Funcion para limpiar el código
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

      // ALTA
    // // variable que guarda la sentencia para insertar los datos
    $sql = "INSERT INTO tb_libros ( titulo, autor, genero, precio)
    VALUES ('$titulo', '$autor', '$genero', $precio)";

    if ($conn->query($sql)=== TRUE) {

      header('Location: index.php');

    }else{
      header('Location: index.php');
    }

    /* LOGIN */
        if (isset($_POST["submitL"])) {
          $usuarioL = $_POST["usuari"];
          $passL = $_POST["pass"];
          $login = "select * from usuarios where usuari like '$usuarioL' and contrasenya like '$passL'";

          $result = $conn->query($login);

            if ($result->num_rows > 0) {
              // inicio la sesion
              session_start();
              $_SESSION['usuario'] = $usuarioL;
              header('location: index.php');
            }else {
              include("pantalla_login.php");
              header('location: index.php?error=si');
            }

        }else {
          echo "ERROR";
        }
      /* LOGOUT*/
      if (isset($_GET["logout"])) {
        session_start();
        // Borra contingut de $_SESSION
        session_unset();
        // elimina la sessio
        session_destroy();

        header('location: index.php');
      }
   ?>
