<?php
  //iniciar una sesion y hacer usa de la variable session $_SESSION
  session_start();

  require_once '../app/conexion.php';
  $conexion = conexion();

  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];

  // echo $usuario, $contrasenia;
  $sql = "SELECT usuario_email, usuario_password  FROM t_usuarios WHERE usuario_email = '$usuario' AND usuario_password = '$contrasenia'";
  
  if ($conexion->real_query($sql)) {
    $_SESSION['usuario'] = $usuario;
    echo 1;
  } else {
    echo 0;
  }

  // $result = mysqli_query($conexion, $sql);
  // $resultado_usuario = mysqli_fetch_array($result)['usuario_existente'];
  // if ($resultado_usuario > 0) {
  //   $_SESSION['usuario'] = $usuario;
  //   echo 1;
  // } else {
  //   echo 0;
  // }
  
?>