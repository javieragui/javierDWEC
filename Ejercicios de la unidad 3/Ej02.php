<?php

  function Ej01(){
     $noms = array(
      "Nom"=> "Alberto Contador",
      "Professio"=>"Ciclista",
      "Edat"=>35,
      "Lloc de naixement"=> "Madrid",
      "Equip"=> "Trek"
    );
    foreach ($noms as $key => $value) {
      $pos = strpos($value, 'a');

      if($pos == true){
        echo "<table border =1>";
        echo " <tr><td> $key</td> <td> $value</td></tr>";
        echo "</table>";
    }
    }
}
 ?>
 <?php Ej01()?>
