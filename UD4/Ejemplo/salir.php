<?php
session_start(); // Iniciar la sesión para poder destruirla

// Destruir todas las variables de sesión
session_unset(); 

// Destruir la sesión
session_destroy(); 

// Redirigir a la página principal (o la página que prefieras)
header("Location: guiadaSesiones.php");  // Redirige a la página de inicio u otra
exit();
?>