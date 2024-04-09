<?php
include("db.php"); // Incluye el archivo de conexión a la base de datos

if (isset($_POST['register'])) {
    // Comprueba si el formulario de registro se ha enviado

    // Verifica que se hayan completado todos los campos del formulario
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        // Obtiene y limpia el valor del campo 'email' del formulario
        $email = trim($_POST['email']);

        // Comprueba si el email ya existe en la base de datos
        $consulta = "SELECT email FROM users WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            // Si el email ya existe, muestra un mensaje de error y redirige al formulario de registro
            include("registration_form.php");
            echo '<h3 class="error">El email ya está registrado. Por favor, elige otro.</h3>';
        } else {
            // Si el email no existe, procede a registrar el usuario

            // Obtiene y limpia los valores de los campos del formulario
            $name = trim($_POST['name']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");

            // Crea una consulta SQL para insertar los datos del usuario en la base de datos
            $consulta = "INSERT INTO users(nombre, email, direccion, telefono, contraseña, fecha)
               VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";

            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                // Si el registro es exitoso, muestra un mensaje de éxito y redirige al inicio
                include("index.php");
                echo '<h3 class="success">Tu registro fue exitoso</h3>';
            } else {
                // Si hay un error en el registro, muestra un mensaje de error y redirige al formulario de registro
                include("registration_form.php");
                echo '<h3 class="error">Ocurrió un error</h3>';
            }
        }
    } else {
        // Si no se completaron todos los campos del formulario, muestra un mensaje de error y redirige al formulario de registro
        include("registration_form.php");
        echo '<h3 class="error">Llena todos los campos</h3>';
    }
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
