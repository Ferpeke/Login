$(document).ready(function(){
  $('#entrar').click(function(){
    $.ajax({
      type : 'POST',
      url : 'control/iniciar_sesion.php',
      data : {
        'usuario' : $('#usuario').val(),
        'contrasenia' : $('#contrasenia').val()
      },
      success: resultado => {
        
        if(resultado == 1) {
           
          window.location = 'view/pagina_inicio.php';

        } else {
          swal('Eror', 'El usuario ó contraseña no es correcta', 'error');
        }

      }
    });
  });
});