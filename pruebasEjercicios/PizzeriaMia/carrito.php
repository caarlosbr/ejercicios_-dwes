<?php
session_start();
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Procesar el formulario para vaciar el carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['vaciar'])) {
        $_SESSION['carrito'] = [];
        header("Location: carrito.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito - faMia</title>
</head>
<body>
    <h1>Carrito de compras</h1>
    <a href="index.php">Volver al menú</a>
    <?php if (!empty($_SESSION['carrito'])): ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION['carrito'] as $producto) {
                $precio = is_array($producto['precio']) ? $producto['precio'][$producto['tamaño']] : $producto['precio'];
                $subtotal = $precio * $producto['cantidad'];
                $total += $subtotal;
                echo "<tr>
                        <td>
                            <img src='img/{$producto['imagen']}' alt='{$producto['nombre']}' width='50'><br>
                            {$producto['nombre']} ({$producto['tamaño']})
                        </td>
                        <td>{$producto['cantidad']}</td>
                        <td>€$precio</td>
                        <td>€$subtotal</td>
                      </tr>";
            }
            
            ?>
            <tr>
                <td colspan="3">Total</td>
                <td>€<?php echo $total; ?></td>
            </tr>
        </table>
        <form method="POST">
            <button type="submit" name="vaciar">Vaciar carrito</button>
            <a href="tramitar.php">Tramitar pedido</a>
        </form>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</body>
</html>
