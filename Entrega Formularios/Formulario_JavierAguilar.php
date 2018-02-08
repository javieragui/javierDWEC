<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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

<?php
	//inicialitzo variables
	$nom = "";
	$llinatges = "";
	$dni = "";
	$telefon = "";

	$que_mostrar = "";
	$nom_buid = false;

  if(isset($_POST['submit'])){
    if(isset ($_POST["nom"]) || isset( $_POST["llinatges"]) || isset($_POST["DNI"])
      || isset($_POST["telefon"]))
    $nom = $_POST["nom"];
		$llinatges = $_POST["llinatges"];
		$dni = $_POST["DNI"];
    $telefon = $_POST["telefon"];

  if($nom == "" ){
    $nom_buid = true;
    $que_mostrar = "formulari";
  }else{
    $que_mostrar = "resultats";
  }
if( $llinatges == ""){
    $nom_buid = true;
    $que_mostrar = "formulari";
  }else{
    $que_mostrar = "resultats";
  }
  if( $telefon == ""){
      $nom_buid = true;
      $que_mostrar = "formulari";
    }else{
      $que_mostrar = "resultats";
    }

  if(strlen($dni)>9 || strlen($dni)<9){
    $que_mostrar = "formulari";
  }else{
    $que_mostrar = "resultats";

  }
}


?>

<?php if ($que_mostrar == "formulari") { ?>
<form action="Formulario_JavierAguilar.php" method="post">
  <p>Nom:<input type="text" name="nom" > <?php if ($nom_buid) echo "<span> ** </span>"; ?> <br></p>
  <p>Llinatges: <input type="text" name="llinatges" ><?php if ($nom_buid) echo "<span> ** </span>"; ?><br></p>
  <p>DNI: <input type="text" name="DNI" ><?php if($nom_buid) echo " <span> ** </span>";?>
                                          <?php if($que_mostrar = "formulari") echo "<span>DNI que no es de 9 caracteres.</span>"; ?><br></p>
  <p>Telefon: <input type="text" name="telefon" ><?php if($nom_buid) echo " <span> ** </span>";?><br></p>
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

<?php }else { ?>


    <table border>
      <tr>
        <td class="cab">Nom:</td><td><?php echo $_POST["nom"]; ?> </td><td class="cab">Llinatges:</td><td><?php echo $_POST["llinatges"]; ?></td>
      </tr>
      <tr>
        <td class="cab">DNI:</td><td><?php echo $_POST["DNI"]; ?></td><td class="cab">Sexe:</td><td><?php if (!isset($_POST["sexo"])){ echo "<span>No incluido campo sexo</span>";}else {echo $_POST["sexo"];} ?></td>
        <td class="cab">Data naixement:</td><td><?php if($_POST["date"] == ""){ echo "<span>Fecha no incluida.</span>";}else {echo $_POST["date"];} ?></td>
      </tr>
      <tr>
        <td class="cab">Telèfon:</td><td><?php echo $_POST["telefon"]; ?></td><td class="cab">Email:</td><td><?php if($_POST["email"] == ""){ echo "<span>No incluyo campo email<span>";}else {echo $_POST["email"];} ?></td>
      </tr>
      <tr>
        <td class="cab">Experiència Laboral:</td><td><?php {echo $_POST["experiencia"];} ?></td>
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
