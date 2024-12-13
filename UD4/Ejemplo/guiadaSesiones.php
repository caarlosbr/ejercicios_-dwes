<?php
session_start();

// Inicializar el tiempo de inicio y el intervalo en minutos (en este caso, 1 minuto)
if (!isset($_SESSION['inicioTime'])) {
    $_SESSION['inicioTime'] = time();  // Tiempo actual
    $_SESSION['contador'] = 0;         // Inicializa el contador de pulsaciones
    $_SESSION['intervaloTime'] = 1;    // Intervalo de tiempo en minutos
}

// Verifica si el tiempo de la sesión ha expirado
$tiempo_transcurrido = time();
$tiempo_maximo = $_SESSION['inicioTime'] + ($_SESSION['intervaloTime'] * 60);

// Si el tiempo transcurrido es mayor al tiempo máximo permitido (1 minuto), redirigir a salir.php
if ($tiempo_transcurrido > $tiempo_maximo) {
    header("Location: salir.php");  // Redirige a salir.php si el tiempo ha expirado
    exit();
}

// Incrementar el contador si se pulsa el enlace
if (isset($_GET['pulsar'])) {
    $_SESSION['contador']++;  // Aumenta el contador en 1
    $_SESSION['inicioTime'] = time();  // Reinicia el tiempo de inicio cada vez que se pulsa el enlace
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Pulsaciones</title>
</head>
<body>

    <h1>Contador de Pulsaciones</h1>
    <p>Pulsaciones: <?php echo isset($_SESSION['contador']) ? $_SESSION['contador'] : 0; ?></p>

    <!-- Enlace para aumentar el contador -->
    <a href="?pulsar=1">Pulsa aquí para aumentar el contador</a>

    <p>Si no pulsas el enlace en 1 minuto, el contador se reiniciará y serás redirigido a otra página.</p>

</body>
</html>
