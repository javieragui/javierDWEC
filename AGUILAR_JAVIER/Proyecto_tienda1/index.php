<?php

  require_once("db/db.php");

  require_once("controllers/product_controller.php");

  if(isset($_GET['controller']) && isset($_GET['action']) ){

    if($_GET['controller'] == "product"){

      if ($_GET['action'] == "view") {
             $controller = new product_controller();
             $controller->view();
           }
      }
    }else{
    $controller = new product_controller();
    $controller->view();
  }

 ?>
