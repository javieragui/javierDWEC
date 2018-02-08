

<?php
  function Ej01(){
     $noms = array(
      "Nom"=> "Alberto Contador",
      "Professio"=>"Ciclista",
      "Edat"=>35,
      "Lloc de naixement"=> "Madrid",
      "Equip"=> "Trek"
    );
      echo "<table border =1>";
     foreach ($noms as $key => $value) {
        echo " <tr><td> $key</td> <td> $value</td></tr>";
      }
      echo "</table>";
}
 ?>
 <?php Ej01()?>
