
<?php if (! isser ($_POST)['submit'])) }?>
<!DOCTYPE html>
<form action="ej03.php" method="post">
  Nom complet: <input type="text" name="name"><br>
  Edat: <input type="text" name="edat"><br>
  E-mail: <input type="text" name="email"><br>
  <br>
  Genero:<br>


  <input type="radio" name="genero" value="hombre" checked>Hombre<br>
  <input type="radio" name="genero" value="mujer" checked>Mujer<br>
  <input type="radio" name="genero" value="otro" checked>Otro<br>
  <br>

  Aficiones:<br>

  <input type="checkbox" name="aficion" value="Deporte" checked>Deporte <br>
  <input type="checkbox" name="aficion1" value="TV" checked>Ver Television<br>
  <input type="checkbox" name="aficion2" value="Navegar" checked>Navegar<br>
  <input type="checkbox" name="aficion3" value="Idiomas" checked>Aprender idiomas <br>
  <input type="checkbox" name="aficion4" value="Escribir" checked>Escribir <br>

  <input type="submit">
  </form>

<?php} else { ?>

<html>
  <head><title>Ejemplo de tabla sencilla</title></head>
  <style>
  table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
  }
  </style>
<body>
  <h1>Listado de cursos</h1>

  <table>
  <tr>
    <td><strong>Nom complet</strong></td>
    <td><strong>Edat</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Genero</strong></td>
    <td><strong>Aficiones</strong></td>

  </tr>
  <tr>
    <td><?php echo $_POST[name]; ?></td>
    <td><?php echo $_POST[edat]; ?></td>
    <td><?php echo $_POST[email]; ?></td>
    <td><?php echo $_POST[genero]; ?></td>
    <td><?php echo $_POST[aficion];
              echo $_POST[aficion1];
              echo $_POST[aficion2];
              echo $_POST[aficion3];
              echo $_POST[aficion4];?></td>
  </tr>
  </form>

</body>
</html>
