<?php

//Llamada al modelo
require_once("models/product_model.php");
require_once("models/category_model.php");


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

    //LLamo a la funcion para que me muestre
    // el Carrousel
    $promotion=new product_model();

    $ofertas=$promotion->get_Promotion();

    //LLamo a la funcion para que me muestre las
    //categorias .
    $category=new category_model();

    $verCategorias=$category->get_ViewCategory();
    //LLamo a la funcion para que me muestre las
    //subcategorias
    $subCategory=new category_model();

    $verSubcategorias= $subCategory->get_ViewSubcategory();

    //LLamada a la vista: mostrar la pantalla
    require_once("views/product_views.phtml");
  }



//Necesitas sacar la id de la categoria y sacar
//las subcategorias de la base de datos.
  function ordCategoria(){
    $product=new product_model();
    $subCatId = $_GET['ID'];
      $product=get_Category($subCatId);

      require_once("views/product_views.phtml");
    }
  }

select NAME from PRODUCT,CATEGORY where PRODUCT.CATEGORY = CATEGORY.PARENTCATEGORY;
}
 ?>
