<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
</head>
<body>
    <h1>Pagina privada</h1>
    <p>Esto es una pagina privada, solo tienen acceso los usuarios autenticados</p>
    <a href="index.php">Volver al inicio</a>
</body>
</html>