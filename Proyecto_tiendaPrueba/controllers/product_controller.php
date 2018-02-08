<?php

//Llamada al modelo
require_once("models/product_model.php");

class product_controller{

  //Muestra listado del buscador
  function buscador($buscador){
   $product=new product_model();

   //Uso del metodo de busqueda
   $datos=$product->getBuscador($buscador);

   require_once("views/product_views.phtml");

  }

  //Muestra listado de productos
  function view(){
    $product=new product_model();

    //Uso metodo del modelo de productos
    $datos=$product->get_product();

//Carrousel
$promotion=new product_model();

     $ofertas=$promotion->get_Promotion();

    //LLamada a la vista: mostrar la pantalla
    require_once("views/product_views.phtml");
  }


   
//Necesitas sacar la id de la categoria y sacar 
//las subcategorias de la base de datos.
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
