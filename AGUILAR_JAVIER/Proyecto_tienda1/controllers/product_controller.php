<?php

//Llamada al modelo
require_once("models/product_model.php");

class product_controller{

  //Muestra listado de productos
  function view(){
    $product=new product_model();

    //Uso metodo del modelo de productos
    $datos=$product->get_product();

    //LLamada a la vista: mostrar la pantalla
    require_once("views/product_views.phtml");
  }
}

 ?>
