<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="Registro">
    <form class="formLogin" action="controlador.php" method="post">
      <p class="texto">Login</p>
        <span class="fontawesome-user"><input type="text" name="usuari" required placeholder="Nombre de usuario" autocomplete="off">
        <span class="fontawesome-lock"><input type="password" name="pass" id="password" required placeholder="Contraseña" autocomplete="off">
        <input type="submit" name="submitL" value="Login" title="Logea tu cuenta">
        <?php
          if (isset($_GET["error"])) {
              echo "<p id=\"error\" style=\"color: red;\">Usuario o contraseña incorrectos</p>";
          }
         ?>
         </div>
    </form>
  </body>
</html>
