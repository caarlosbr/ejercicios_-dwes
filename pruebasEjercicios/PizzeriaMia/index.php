<?php
session_start();
require_once 'config.php';

// Inicializa el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Añadir productos al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agregar'])) {
    $categoria = $_POST['categoria'];
    $productoIndex = $_POST['productoIndex'];
    $tamaño = $_POST['tamaño'] ?? null;

    $producto = $productos[$categoria][$productoIndex];
    $producto['cantidad'] = $_POST['cantidad'];
    $producto['tamaño'] = $tamaño;

    $_SESSION['carrito'][] = $producto;
    header("Location: carrito.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>faMia - Productos</title>
</head>
<body>
    <h1>faMia - Bienvenidos</h1>
    <nav>
        <a href="?categoria=pizzas">Pizzas</a> |
        <a href="?categoria=bebidas">Bebidas</a> |
        <a href="?categoria=postres">Postres</a> |
        <a href="carrito.php">Carrito</a> |
        <a href="gestion_comandas.php">Gestión de Comandas</a>
    </nav>
    <main>
        <?php
        $categoria = $_GET['categoria'] ?? 'pizzas';
        if (isset($productos[$categoria])) {
            echo "<h2>" . ucfirst($categoria) . "</h2>"; // Primera letra a mayus
            foreach ($productos[$categoria] as $index => $producto) {
                echo '<form method="POST" action="">';
                echo "<img src='img/{$producto['imagen']}' alt='{$producto['nombre']}' width='100'><br>";
                echo "<strong>{$producto['nombre']}</strong><br>";
                echo "Precio: €" . (is_array($producto['precio']) ? "Desde " . min($producto['precio']) : $producto['precio']) . "<br>";
                if ($categoria == 'pizzas') {
                    echo "Tamaño: 
                        <select name='tamaño'>
                            <option value='individual'>Individual</option>
                            <option value='media'>Media</option>
                            <option value='familiar'>Familiar</option>
                        </select><br>";
                }
                echo "Cantidad: <input type='number' name='cantidad' value='1' min='1'><br>";
                echo "<input type='hidden' name='categoria' value='$categoria'>";
                echo "<input type='hidden' name='productoIndex' value='$index'>";
                echo "<button type='submit' name='agregar'>Añadir al carrito</button>";
                echo '</form><hr>';
            }
        } else {
            echo "<p>Categoría no encontrada.</p>";
        }
        ?>
    </main>
    </br><a href="cierre2.php">cerrar sesión</a>
    <a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/main/pruebasEjercicios/PizzeriaMia/index.php'>Ver código</a>

</body>
</html>
