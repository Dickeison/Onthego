<?php
$email = $_POST['email']; // Obtiene el email del formulario 📧
$contraseña = $_POST['contraseña']; // Obtiene la contraseña del formulario 🔐

include("db.php"); // Incluye el archivo de conexión con la base de datos 🏢

// Consulta SQL para buscar al usuario en la base de datos 🔍
$consulta = "SELECT * FROM users WHERE email = '$email' AND contraseña = '$contraseña'"; 
// Ejecuta la consulta en la base de datos y obtiene el resultado
$resultado = mysqli_query($conexion, $consulta); 

if (mysqli_num_rows($resultado) == 1) { // Comprueba si se encontró un resultado único en la base de datos 📊
    session_start(); // Inicia una sesión para el usuario 🔑

    // Muestra la consulta SQL generada (solo con fines de depuración) 🚀
    echo "Consulta SQL generada: " . $consulta;

    $row = mysqli_fetch_assoc($resultado); // Obtiene los datos del usuario encontrado en la base de datos 📄
    $_SESSION['nombre'] = $row['nombre']; // Almacena el nombre del usuario en la sesión 🙋
    $_SESSION['email'] = $row['email']; // Almacena el email del usuario en la sesión 📧
    header("location:home.php"); // Redirige al usuario a la página de inicio 🏠
} else {
    include("index.php"); // Incluye la página de inicio en caso de error de autenticación 🏡
    echo '<h1 class="bad">ERROR DE AUTENTIFICACIÓN</h1>'; // Muestra un mensaje de error en caso de autenticación fallida ❌
}

mysqli_free_result($resultado); // Libera los resultados de la consulta
mysqli_close($conexion); // Cierra la conexión con la base de datos 🚪
