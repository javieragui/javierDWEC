<?php

//Llamada al modelo
require_once("models/product_model.php");

class product_controller{

  //Muestra listado de productos
  function view(){
    $product=new product_model();

    //Uso metodo del modelo de productos
    $datos=$product->get_product();

    //Carrousel
    $product=new product_model();

    $ofertas=$product->getPromotion();

    //LLamada a la vista: mostrar la pantalla
    require_once("views/product_views.phtml");
  }

    //Muestra listado del buscador
   function buscador($buscador){
     $product=new product_model();

     //Uso del metodo de busqueda
     $datos=$product->getBuscador($buscador);

     require_once("views/product_views.phtml");

   }

   function viewPromotion(){
     $product=new product_model();

     $ofertas=$product->getPromotion();

     require_once("views/product_views.phtml");

   }

  function ordCategoria($category){
    $product=new product_model();
    $category=new product_model();

    if(isset($_GET['name'])){
      $category->setCategory('name');
      //Uso metodo del metodo de productos
      $datos=$product->ordCategoria();
      //Llamado a la vista: mostrar pantalla
      require_once("views/product_views.phtml");

  }
  }




 }


 ?>
