<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

</head>

  <body>

<?php
error_reporting(E_ALL);
eccvxzvvczxho "dfsadfs";


echo $_POST['dsddsubmit'];
	//inicialitzo variables
	$nomasasd  = "";
	$llinatgesgfreger = "";
	$dni = "";
	$telefon = "";
	$email = "";
	$experiencia = "";
	$date = "";

	$mostrarResultado = false;
	$nom_buid = false;
	$llinatges_buid = false;
	$telefon_buid = false;
	$dni_buid = false;


  if(isset($_POST['submit'])){

	if(isset ($_POST["nom"])){
    $nom = $_POST["nom"];
}
	if(isset( $_POST["llinatges"])){
		$llinatges = $_POST["llinatges"];

}
	if(isset($_POST["DNI"])){
		$dni = $_POST["DNI"];

}
	if(isset($_POST["telefon"])){
		$telefon = $_POST["telefon"];
}
if(isset($_POST["email"])){
	$email = $_POST["email"];
}
if(isset($_POST["experiencia"])){
	$experiencia = $_POST["experiencia"];
}
if(isset($_POST["date"])){
	$date = $_POST["date"];
}

}

?>
</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style >
			.cab{
				background-color: #999;
			}
			span{
				color:red;
			}
		</style>
	</head>
	<body>


<?php if((!$mostrarResultado) && empty($_POST["nom"]) || empty($_POST["llinatges"]) ||  empty($_POST["DNI"]) ||  empty($_POST["telefon"])) {?>
<form action="prueba.php" method="post">
  <p>Nom:<input type="text" name="nom" > <?php if (empty($_POST["nom"])) echo "<span> ** </span>"; ?> <br></p>
  <p>Llinatges: <input type="text" name="llinatges" ><?php if (empty($_POST["llinatges"])) echo "<span> ** </span>"; ?><br></p>
  <p>DNI: <input type="text" name="DNI" ><?php if(empty($_POST["DNI"])) echo " <span> ** </span>";?><br></p>
  <p>Telefon: <input type="text" name="telefon" ><?php if(empty($_POST["telefon"])) echo " <span> ** </span>";?><br></p>
  <p>Email: <input type="text" name="email"><br></p>
  <p>Data de naixement: <input type="date" name="date"><br></p>

  <p>Sexe: </p><br>

  <input type="radio" name="sexo" value="hombre" >Hombre
  <input type="radio" name="sexo" value="mujer" >Mujer<br>
  <br>
  <p>Coneixements:</p>

  <input type="checkbox" name="coneixement" value="Java" >Java <br>
  <input type="checkbox" name="coneixement1" value="HTML5" >HTML5<br>
  <input type="checkbox" name="coneixement2" value="Javascript" >Javascript<br>
  <input type="checkbox" name="coneixement3" value="PHP" >PHP <br>
  <input type="checkbox" name="coneixement4" value="XML" >XML <br>
  <input type="checkbox" name="coneixement5" value=".NET" >.NET <br>
  <br>

  <p>Experiencia Laboral:</p>

  <input type="radio" name="experiencia" value="Sense experiencia" checked > Sense experiencia<br>
  <input type="radio" name="experiencia" value="< 1 any" >< 1 any<br>
  <input type="radio" name="experiencia" value="< 2 anys" >< 2 anys<br>
  <input type="radio" name="experiencia" value="> 2 anys" >> 2 anys<br>
  <br>


<input type="submit" name="submit" value="submit">

</form>

<?php }else  { ?>


    <table border>
      <tr>
        <td class="cab">Nom:</td><td><?php echo $nom; ?> </td><td class="cab">Llinatges:</td><td><?php echo $llinatges; ?></td>
      </tr>
      <tr>
        <td class="cab">DNI:</td><td><?php echo $dni; ?></td><td class="cab">Sexe:</td><td><?php if (!isset($sexo)){ echo "<span>No incluido campo sexo</span>";}else {echo $sexo;} ?></td>
        <td class="cab">Data naixement:</td><td><?php if($date == ""){ echo "<span>Fecha no incluida.</span>";}else {echo $date;} ?></td>
      </tr>
      <tr>
        <td class="cab">Telèfon:</td><td><?php echo $telefon; ?></td><td class="cab">Email:</td><td><?php if($email == ""){ echo "<span>No incluyo campo email<span>";}else {echo $email;} ?></td>
      </tr>
      <tr>
        <td class="cab">Experiència Laboral:</td><td><?php {echo $experiencia;} ?></td>
      </tr>
      <tr>
        <td class="cab">Coneixements:</td><td><?php if(!isset($_POST["coneixement"])){ echo "";}else {echo $_POST["coneixement"];} ?>
                                  <?php if(!isset($_POST["coneixement1"])){ echo "";}else {echo $_POST["coneixement1"];} ?>
                                  <?php if(!isset($_POST["coneixement2"])){ echo "";}else {echo $_POST["coneixement2"];} ?>
                                  <?php if(!isset($_POST["coneixement3"])){ echo "";}else {echo $_POST["coneixement3"];} ?>
                                  <?php if(!isset($_POST["coneixement4"])){ echo "";}else {echo $_POST["coneixement4"];} ?>
                                  <?php if(!isset($_POST["coneixement5"])){ echo "";}else {echo $_POST["coneixement5"];} ?></td>
      </tr>
    </table>
  </body>
</html>
<?php }  ?>
