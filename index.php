<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RETO #1 – ACCESO A ZONA RESTRINGIDA</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <a href="https://www.webevolution.com.co/#!home" target="_blank"><img src="https://www.webevolution.com.co/wp-content/uploads/2018/04/logo-web-3.png" class="logo"></a>
  <div class="main">
    <h1>ZONA RESTRINGIDA</h1>
    <form action="" id="formlg">
      <h2>Usuario</h2>
      <!-- Grupo: Nombre -->
      <div class="formularioNew__grupo" id="grupo__nombre_new">
        <div class="formularioNew__grupo-input">
          <input class="formularioNew__input" name="nombre_new" id="name_new" placeholder="Ingrese el Usuario" required>
          <i class="formularioNew__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formularioNew__input-error">Ingrese un nombre válido, solo puede contener letras y espacios</p>
      </div>
      <h2>Constraseña</h2>
      <!-- Grupo: Contraseña -->
      <input class="formularioNew__input" type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Ingrese la Constraseña" required />
      <input type="submit" class="botonlg" value="Iniciar Sesión" />
    </form>
    <div class="error">
      <span>Los datos de ingreso son incorrectos, por favor verifique de nuevo</span>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>