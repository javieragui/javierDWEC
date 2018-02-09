<?php
require_once("models/usuarios_model.php");
require_once("models/product_model.php");

class usuarios_controller {
  function login($username,$password){

    $usuarios = new usuarios_model();
    $usuarios->setUsername($_POST['username']);
    $usuarios->setPassword($_POST['password']);

    $encontrado = $usuarios->validar_usuario();


    if($encontrado){
      $_SESSION['username']=$username;
        header('Location: index.php?controller=product&action=view');

      } else {
        header('Location: index.php?controller=usuarios&action=mostrar_login');
      }
    }

    function logout(){
        session_unset($_SESSION['username']);
        header('Location: index.php?controller=product&action=view');
        exit();
      }

    function mostrar_login(){
      require_once("views/login.phtml");
    }

    function insert_user(){
      $user=new usuarios_model();

      if(isset($_POST['registroUsuario'])){


        $user->setUsername($_POST['userReg']);
        $user->setPassword($_POST['passReg']);
        $user->setPassword2($_POST['passReg2']);
        $user->setNameCompleto($_POST['nameReg']);
        $user->setEmail($_POST['emailReg']);
        $user->setDireccion($_POST['dirReg']);
        $user->setPostal($_POST['postalReg']);


        $error = $user->add_user();

        if(!$error){

          header("Location: index.php?controller=product&action=view");

        }else{
          header("Location: index.php?controller=usuarios&action=mostrar_register");
        }
      }
    }

    function mostrar_register(){
      require_once("views/register.phtml");
    }

}
?>
