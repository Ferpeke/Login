<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>Login</title>
  </head>

  <?php
    
    require_once './app/config.php';
    require_once './app/dependencias.php';
    
  ?>
  <body class="bg-info">
    
    <div class="container">
      <div class="row justify-content-center mt-4">
        <div class="col-sm-4 bg-white rounded p-4 shadow">
          
          <div class="text-center">
            <img src="./img/elefante.svg" alt="" width="90px">
            <h1 style="font-family: monospace;">Iniciar Sesión</h1>
          </div>
          
          
          <hr>
          <form>
          
            <div>
              <label for="usuario">Usuario:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required = "" autocomplete="off">

            </div>
            <div>

              <label for="contrasenia">Contraseña:</label>
              <input type="text" class="form-control" id="contrasenia" name="contrasenia" required = "" autocomplete="off">

            </div>
          </form>

          <div class="mt-3">
            <span class="btn btn-info w-100 btm-control" id="entrar">Entrar</span>
          </div>

          <div class="text-center mt-1" style="font-family: monospace;">
            <a href="./view/registro.php">Registrarse</a>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>