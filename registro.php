<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <STYLE TYPE="text/css" MEDIA=screen>
    <!--
    .row{ padding-top: 15px;}
    -->
    </STYLE>
    <title>Registro ReciClick</title>
  </head>
  <body>
    
    <div class="jumbotron" style="background-image: url('https://static6.depositphotos.com/1025674/564/v/950/depositphotos_5647896-stock-illustration-recycling-background.jpg'); width: auto; height: 500px;">
      <div style="float: left; width: 50%;">
        <h1 class="display-4" style="color:white">Registrate</h1>
        <p class="lead" style="color:white";>Obten descuentos en recoleccionde basura y recibo del acueducto.</p>
        <hr class="my-4" style="color:white";>
        <p style="color:white";>ayudanos a identificar los principales problemas en recoleccion debasuras en bogota y obten beneficios refeajdos en tus tarifas de recoelecion de aseo y acueducto.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Terminos y condiciones</a>
      </div>
      <div style="float: right; width: 40%; background-color: gainsboro; border-radius: 10px; padding: 20px;">
        <a class="btn btn-primary btn-lg" href="#" role="button" style="width: 100%; background-color: black;" >Ya tengo una cuenta</a>
        <form name="registro" action="registroCrear.php" method="post" >
          <div class="row">
            <div class="col">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombres">
            </div>
            <div class="col">
              <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
            </div>
          </div>
          <div class="row" style="padding-left: 15px; padding-right: 15px;">
            <input type="text" name="correo" id="correo" class="form-control" placeholder="mail: nombre@ejemplo.com">
          </div>
          <div class="row" style="padding-left: 15px; padding-right: 15px;">
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
          </div>
          <div class="row" style="padding-left: 15px; padding-right: 15px;">
            <input type="text" name="clave" id="clave" class="form-control" placeholder="Contraseña">
          </div>
          <a class="btn btn-primary btn-lg" href="#" role="button" style="width: 100%; margin-top: 15px; background-color: green" onclick="document.forms.registro.submit()"> Crear Cuenta</a>
        </form>
      </div>
    </div>
    <br>
    <center>
    <a class="btn btn-success" href="registroListar.php">Usuarios creados</a>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>