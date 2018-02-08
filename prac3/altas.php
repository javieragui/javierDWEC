<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      form{
        border: 1px solid black;
        width: 180px;
        margin: 5px;
        padding: 5px;
        border-radius: 15px;
        font-family:  Arial;
        text-align: center;
        background: linear-gradient(red, white);

      }
      button, .guardar{
        height: 30px;
        width: 75px;
        background-color: red;
        color: white;
        font-weight: bold;
        border-radius: 15px;
      }
    </style>
  </head>
  <body>
<!-- Hacemos el formulario donde el usuario creara los datos que escriba. -->
<form action="controlador.php" method="post">
  
  <p>Nombre: </p><input type="text" name="nombre">
  <p>Modelo: </p><input type="text" name="modelo">
  <p>Capacidad: </p><input type="text" name="capacidad">
  <p>Precio: </p><input type="number" name="precio"><br>
  <br>

  <input type="submit" name="buttGuardar" value="Guardar" class="guardar">
  <a href="index.php"><button type="button" name="buttCancelar">Cancelar</button></a>

</form>

</body>
</html>
