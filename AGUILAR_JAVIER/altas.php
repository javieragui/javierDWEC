<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Hacemos el formulario donde el usuario creara los datos que escriba. -->
    <form action="controlador.php" method="post">

      <p>Titulo: </p><input type="text" name="titulo">
      <p>Autor: </p><input type="text" name="autor">
      <p>Genero: </p><input type="select" name="genero">
      <p>Precio: </p><input type="number" name="precio"><br>
      <br>

      <input type="submit" name="buttGuardar" value="Guardar" class="guardar">
      <a href="index.php"><button type="button" name="buttCancelar">Cancelar</button></a>

    </form>
  </body>
</html>
