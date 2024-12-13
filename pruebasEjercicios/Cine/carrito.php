<?php
session_start();

if (empty($_SESSION['carrito'])) {
    echo "<p>El carrito está vacío.</p>";
    echo '<a href="peliculas.php">Volver a las películas</a>';
    exit();
}

if(isset($_POST['limpiar_carrito'])){
    $_SESSION['carrito'] = [];
    header("Location: carrito.php");
}

if(isset($_POST['ticket'])){
    $fecha = date("Ymd_His");

    $carpetaTickets = __DIR__ ."/tickets/";

    if (!is_dir($carpetaTickets)) {
        mkdir($carpetaTickets, 0777, true);
    }

    $ticket = $carpetaTickets . "ticket_cine_{$fecha}.txt"; 
    $contenido = "TICKET DE RESERVA\n";
    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado';
    $contenido .= "Usuario: " . $usuario . "\n\n";
    foreach ($_SESSION['carrito'] as $item){
        $contenido .= "Pelicula: {$item['titulo']}\n";
        $contenido .= "Horario: {$item['horario']}\n";
        $contenido .= "Entradas: {$item['precio']}\n\n";
    }
    file_put_contents($ticket, $contenido);
    unset($_SESSION['carrito']);
    header("Location: carrito.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito</h1>

    <ul>
        <?php foreach($_SESSION['carrito'] as $item): ?>
        <li>
            Pelicula: <?php echo $item['titulo']; ?><br/>
            Horario: <?php echo $item['horario']; ?><br/>
            Precio: <?php echo $item['precio']; ?><br/>
        </li>
        <?php endforeach; ?>
    </ul>
    <form action="" method="post">
        <input type="submit" name="limpiar_carrito" value="Limpiar Carrito"><br/>
        <input type="submit" name="ticket" value="Sacar Ticket"><br/>
    </form>
    <a href="peliculas.php">Volver a Peliculas</a>
</body>
</html>