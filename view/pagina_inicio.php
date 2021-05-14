<?php
  
  session_start();
  
  require_once '../app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['usuario'];
  $sql = "SELECT usuario_nombre, usuario_paterno  FROM t_usuarios WHERE usuario_email = '$usuario'";
  // echo $_SESSION['usuario'];
  $datos = $conexion->query($sql);
  while ($mostrar = mysqli_fetch_assoc($datos)) {
    $nombre = $mostrar['usuario_nombre'];
    $apellido = $mostrar['usuario_paterno'];
  }
  if (isset($_SESSION['usuario'])) {

    
  
?>

<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>Inicio</title>
  </head>
  <?php

  require_once '../app/config.php';
  require_once '../app/dependencias.php';

  ?>


  <body>
    
    <div class="container">
      <div class="row">
        <div class="col">

          <div class="alert alert-info mt-3" role="alert">
            <div class="row">
              <div class="col text-center">
                <img class="rounded shadown" src="https://picsum.photos/450" alt="" width="450">
              </div>
              <div class="col">
              
                <div class="jumbotron bg-info" style="color: white;">
                  <h1 class="display-3 text-center">Bienvenido!!</h1>
                  <h2 class="display-3 text-center"><?php echo $nombre . ' ' . $apellido?></h2>

                  <hr class="my-2">
                  <p>Esta aplicacion rifa</p>
                  <p class="lead">
                    <a class="btn btn-danger btn-block shadown" href="../control/cerrar_sesion.php" role="button">Salir</a>
                  </p>
                </div>
              
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    
  </body>


</html>

<?php
  
  } else {
    header('location: ../index.php');
  }
  
?>