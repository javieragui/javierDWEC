
<html>
<head><title>Ejemplo de tabla sencilla</title>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
</head>
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
</html>
