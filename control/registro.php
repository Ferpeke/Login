<?php
  
  require_once '../app/conexion.php';

  $conexion = conexion();

  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];

  $sql = "INSERT INTO t_usuarios (usuario_nombre, usuario_paterno, usuario_materno,usuario_email, usuario_password ) 
                                  VALUES ('$nombre', '$paterno', ' $materno', '$email', '$contrasenia' )";
  $query = $conexion->prepare($sql);
  $resultado = $query->execute();
  echo $resultado;
  $conexion->close();
  
?>