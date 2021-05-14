<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <title>Registro</title>
  <?php

  require_once '../app/config.php';
  require_once '../app/dependencias.php';

  ?>
</head>

<body class="bg-success">

  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-sm-4 bg-white rounded p-4 shadow">
        <div class="text-center">
          <img src="../img/registro.svg" alt="" width="90px">
          <h1 style="font-family: fantasy;">Registro</h1>
          
          
        </div>
        <form class="form-group" id="formulario_registro">
          <div>
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required="" autocomplete="off">
          </div>
          <div>
            <label for="paterno">Apellido Paterno:</label>
            <input type="text" class="form-control" id="paterno" name="paterno" required="" autocomplete="off">
          </div>
          <div>
            <label for="materno">Apellido Materno:</label>
            <input type="text" class="form-control" id="materno" name="materno" required="" autocomplete="off">
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required="" autocomplete="off">
          </div>
          <div>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" class="form-control" id="contrasenia" name="contrasenia" required="" autocomplete="off">
          </div>
        </form>
        <div class="mt-3">
          <span class="btn btn-warning w-100 btm-control" id="registrar">Registrar</span>
        </div>

        <div class="text-center mt-1" style="font-family: monospace;">
          <a href="../index.php">cancelar</a>
        </div>
      </div>
    </div>
  </div>




</body>

</html>