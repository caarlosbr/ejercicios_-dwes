<?php
session_start();
if (empty($_SESSION['carrito'])) {
    header("Location: carrito.php");
    exit();
}

// Generación de los archivos
$fecha = date("Ymd_His");
$ticket = "ticket_{$fecha}.txt";
$comanda = "comanda_{$fecha}_pendiente.txt";

$ticketContent = "TICKET DE COMPRA\n\n";
$comandaContent = "COMANDA DE PEDIDO\n\n";

$total = 0;
foreach ($_SESSION['carrito'] as $producto) {
    $precio = is_array($producto['precio']) ? $producto['precio'][$producto['tamaño']] : $producto['precio'];
    $subtotal = $precio * $producto['cantidad'];
    $total += $subtotal;

    $ticketContent .= "{$producto['nombre']} ({$producto['cantidad']} x €$precio) = €$subtotal\n";
    if (isset($producto['tamaño'])) {
        $comandaContent .= "{$producto['nombre']} - {$producto['tamaño']} ({$producto['cantidad']})\n";
    }
}

$ticketContent .= "\nTOTAL: €$total";
file_put_contents($ticket, $ticketContent);
file_put_contents($comanda, $comandaContent);

unset($_SESSION['carrito']); // Vaciar el carrito
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido tramitado</title>
</head>
<body>
    <h1>Pedido tramitado con éxito</h1>
    <a href="<?php echo $ticket; ?>" download>Descargar ticket</a><br>
    <a href="<?php echo $comanda; ?>" download>Descargar comanda</a>
    <a href="index.php">Volver al menú</a>
</body>
</html>
