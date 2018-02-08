<?php
class Conectar{
  public static function conexion(){
    $conexion=new mysqli("localhost","root","aguilar1234", "store01");
    $conexion->query("SET MAMES 'utf8'");
    return $conexion;
  }
}
 ?>
