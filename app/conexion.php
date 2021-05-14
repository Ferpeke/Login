<?php

  function conexion(){
    $conexion = new mysqli('localhost', 'root', 'Nandodrago4', 'sesion', 33061);

    if($conexion->errno){
      echo 'Error en ña conexion' . $conexion->errno;
    } else {
       return $conexion;
    }
   }
  
  
?>