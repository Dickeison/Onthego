<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estiloregistro.css">

</head>
<body>

<form method="post" action="registration_controller.php" >

        <h2>Bienvenidos</h2>
        <p>Inicia tu registro</p>

        

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" class= "validate" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required >
      
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" required>
        
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Dirección">
        
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Teléfono" class= "validate" pattern="[0-9,+]+" required>

        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" required>
        
        </div>

            <input class="btn" type="submit" name="register" value="Enviar">
    
    </form>


</body>
</html>