<?php
class Conectar{
  public static function conexion(){
    $conectar=new mysqli("localhost","root","javi1234", "store01");
    $conexion->query("SET MAMES 'utf8'");
    return $conexion;
  }
}
 ?>
