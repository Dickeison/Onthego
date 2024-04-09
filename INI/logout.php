<?php
// Iniciar la sesión 🚀
session_start();

// Destruir todas las variables de sesión 🔥
session_unset();

// Destruir la sesión 🙅‍♂️
session_destroy();

// Redirigir al usuario a la página de inicio de sesión o a donde desees 🏠
header("location: index.php");
?>
