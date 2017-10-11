

<html>
<head><title>Ejemplo de tabla sencilla</title></head>
<body>

<h1>Listado de cursos</h1>

<table>
<tr>
  <td><strong>Nom complet</strong></td>
  <td><strong>Edat</strong></td>
  <td><strong>Email</strong></td>
</tr>

<tr>
  <td><?php echo $_POST[name]; ?></td>
  <td><?php echo $_POST[edat]; ?></td>
  <td><?php echo $_POST[email]; ?></td>
</tr>
