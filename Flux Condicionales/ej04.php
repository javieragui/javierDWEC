<?php

    $var = $_GET['a'];
    if (is_int($var))
      echo  " es un int.";
    elseif (is_string($var))
      echo " es un string.";
    elseif (is_bool($var))
      echo " es un boolean.";
    elseif (is_float($var))
      echo " es un número real.";
    else
      echo "No es ninguno de los anteriores";

?>
