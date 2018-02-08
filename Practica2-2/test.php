<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      table	{ font-weight: normal;
  	 	  text-align: left;
  		  margin: 5px;
  		  border-collapse: collapse;}
      td	{ border: 1px black solid;
  		  padding: 5px 50px 5px 5px; }
        .cab{
          border: 1px solid black;
          text-align: center;
          background: black;
          background-color: white;
        }

    </style>
  </head>
  <body>

<?php

  require_once("classes.php");
error_reporting(0);

  $procesador1 =new procesador("0001 ","Intel ",200 ,"Processador intel i7");
  $procesador2 =new procesador("0002 ","Intel ",100 ,"Processador intel i5");
  $memoria1 = new memoriaRAM("0003 ","Corsair Dominator ",70 ,"DDR3");
  $memoria2 = new memoriaRAM("0004 ","Corsair Vengeance ",95 ,"DDR4");
  $disco1 = new discosDuros("0005 ","SDD ",102 ,"1Tera");
  $disco2 = new discosDuros("0006 ","HDD ",88 ,"500Gb");
  $placas1 = new placasBases("0007 ","AMD ", 200 ,"2017");
  $placas2 = new placasBases("0008 ","Intel ", 155 ,"2016");


  $inventario = array($procesador1,$procesador2,$memoria1,$memoria2,$disco1,$disco2
  ,$placas1,$placas2);
  $cont= count($inventario);



?>
  <table>
    <div>
    <tr>
      <th class="cab" colspan="3" >Producto</th>
      <th class="cab">Precio</th>
    </tr>
    </div>
    <?php for($i=0; $i<$cont; $i++){?>
    <tr>
        <td ><?php echo $inventario[$i]->getSerie();?></td>
        <td><?php echo $inventario[$i]->getMarca();?></td>
        <td><?php $inventario[$i]->describir();?></td>
        <td align="center"><?php echo $inventario[$i]->getPrecio();?> €</td>

        <?php $precio= $inventario[$i]->getPrecio() ;
        $total=$precio+$total; ?>
    </tr>
    <?php    }?>
    <td colspan="3" >Total: </td><td><?php echo $total . " € "?></td>
  </table>


 </body>
 </html>
