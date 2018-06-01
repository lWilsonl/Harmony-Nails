<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/harmonystyle.css" rel="stylesheet" type="text/css">
  <link rel=icon href=/images/favicon.png type="image/png">
  <title>Login | Harmony Nails</title>
</head>
<body class="text-center">
  <br>
  <br>
  <form action="./php/iniciar_sesion.php" method="POST" class="form-signin border" style="margin: auto;">
    <picture>
        <source media="(min-width: 1000px)" class="centrar" srcset="/images/logo.svg" width="150" height="55">
        <img src="/images/logo-png.png" class="centrar" alt="Harmony Nails">
    </picture>
    <h1 class="h3 mb-3 font-weight-normal">Para continuar, inicie sesión</h1>
    <label for="inputEmail" class="sr-only">Correo</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="User" required>
    <br>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="Pass" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <button class="btn btn-md btn-primary btn-block" type="submit">Iniciar sersión</button>
    <p class="mt-5 mb-3 text-muted">&copy; Harmony Nails - 2018</p>
  </form>
</body>
</html>
