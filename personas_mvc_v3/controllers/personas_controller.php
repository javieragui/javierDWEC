<?php
//Llamada al modelo
require_once("models/personas_model.php");


class personas_controller {


      /* Muestra listado de personas */
      function view() {
        $persona=new personas_model();

        //Uso metodo del modelo de personas
        $datos=$persona->get_personas();

        //Llamado a la vista: mostrar la pantalla
        require_once("views/personas_view.phtml");
      }


}
?>
