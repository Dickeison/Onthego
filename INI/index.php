<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href= "css/login.css">
    <link rel="stylesheet" href= "css/cabecera.css">
    <link rel="stylesheet" href= "css/inicio.css">
 </head>
<body>
   <form action="login_controller.php" method="post">
   <h1>Inicia sesión</h1>
   <p>Correo electronico  <input type="text" placeholder="Ingrese su email" name="email"></p>
   <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
   <br>
   <br>
   <br>
   <p>No tienes una cuenta registrate <a href="registration_form.php">Aquí</a></p>
   <div class="recordar"> <a href="#">¿Olvido su contraseña?</a></div>
   </form>
</body>
</html>