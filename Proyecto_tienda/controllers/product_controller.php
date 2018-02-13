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

   //LLamo a la funcion para que me muestre las
   //categorias .
   $category=new category_model();

   $verCategorias=$category->get_ViewCategory();
   //LLamo a la funcion para que me muestre las
   //subcategorias
   $subCategory=new category_model();

   $verSubcategorias= $subCategory->get_ViewSubcategory();
   //LLamo a la funcion para que que me muestre las marcas
   // en el Filtro
   $brands= new product_model();

   $viewBrands= $brands->get_viewBrand();

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

    //LLamo a la funcion para que que me muestre las marcas
    // en el Filtro
    $brands= new product_model();

    $viewBrands= $brands->get_viewBrand();


    //LLamada a la vista: mostrar la pantalla
    require_once("views/product_views.phtml");
  }


  function ordCategoria(){

      $product=new product_model();

      //LLamo a la funcion para que me muestre las
      //categorias .
      $category=new category_model();

      $verCategorias=$category->get_ViewCategory();
      //LLamo a la funcion para que me muestre las
      //subcategorias
      $subCategory=new category_model();

      $verSubcategorias= $subCategory->get_ViewSubcategory();

      $subCatId = $_GET['ID'];

      $datos=$product->ordCategoria($subCatId);
      //LLamo a la funcion para que que me muestre las marcas
      // en el Filtro
      $brands= new product_model();

      $viewBrands= $brands->get_viewBrand();

      require_once("views/product_views.phtml");

    }

    public function filterBrand(){
      $valorFiltro="";
      $marcas = $_POST['marcas'];
      $i=0;
      foreach ($marcas as $value) {
      if ($i==0) {
      $valorFiltro="WHERE BRAND =".$value;
      }else{
        $aux="OR BRAND =".$value;
        $valorFiltro = $valorFiltro ." ".$aux;
      }
      $i++;
      }

      $product = new product_model();

      $filterBrands= $product->filterBrand($valorFiltro);

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

      //LLamo a la funcion para que que me muestre las marcas
      // en el Filtro
      $brands= new product_model();

      $viewBrands= $brands->get_viewBrand();


      //LLamada a la vista: mostrar la pantalla
      require_once("views/product_views.phtml");
    }
    public function filterPrice($precioMin,$precioMax){

      $product= new product_model();

      $filterPrices = $product->filterPrice($precioMin,$precioMax);

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

      //LLamo a la funcion para que que me muestre las marcas
      // en el Filtro
      $brands= new product_model();

      $viewBrands= $brands->get_viewBrand();

      require_once("views/product_views.phtml");

    }



}
 ?>
