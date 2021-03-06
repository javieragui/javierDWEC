<?php
session_start();

  require_once("db/db.php");

  require_once("controllers/product_controller.php");
  require_once("controllers/usuarios_controller.php");

  if(isset($_GET['controller']) && isset($_GET['action']) ){

    if($_GET['controller'] == "product"){

      if ($_GET['action'] == "view") {
             $controller = new product_controller();
             $controller->view();
           }
      if($_GET['action'] == "buscador"){
           $controller = new product_controller();
           $buscador= $_POST['busqueda'];
           $controller->buscador($buscador);
         }
      if($_GET['action'] == "ordCategoria"){
          $controller = new product_controller();
          $idCategory = $_GET['idParentCategory'];
          var_dump($_GET['idParentCategory']);
          $controller->ordCategoria($idCategory);

        }
    }

    if ($_GET['controller'] == "usuarios") {
      $controllerP = new product_controller();

      if ($_GET['action'] == "login") {
        $controller = new usuarios_controller();
        $username= $_POST['username'];
        $password= $_POST['password'];
        $controller->login($username,$password);

      }
      if ($_GET['action'] == "logout") {
        $controller = new usuarios_controller();
        $controller->logout();
      }
      if ($_GET['action'] == "mostrar_login") {
        $controller = new usuarios_controller();
        $controller->mostrar_login();
      }
      if ($_GET['action'] == "registroUsuario") {
        $controller = new usuarios_controller();
        $controller->insert_user();
        $controllerP->view();
      }
      if ($_GET['action'] == "mostrar_register") {
        $controller = new usuarios_controller();
        $controller->mostrar_register();
      }
    }
  }else{
    $controller = new product_controller();
    $controller->view();

}
