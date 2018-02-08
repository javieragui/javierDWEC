<?php
require_once("db/db.php");

require_once("controllers/personas_controller.php");


if (isset($_GET['controller']) && isset($_GET['action']) ) {

    if ($_GET['controller'] == "personas") {

         

    }


} else {
   $controller = new personas_controller();
   $controller->view();
}
?>
