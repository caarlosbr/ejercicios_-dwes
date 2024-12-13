<?php
session_start();

// Credenciales de acceso
define('USUARIO', 'carlos');
define('CONTRASENA', 'borreguero');

// Manejo de la autenticación
if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = false;
}

// Verificar inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    if ($usuario === USUARIO && $contrasena === CONTRASENA) {
        $_SESSION['autenticado'] = true;
        header("Location: gestion_comandas.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

// Si no está autenticado, mostrar formulario de login
if (!$_SESSION['autenticado']) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Zona privada</title>
    </head>
    <body>
        <h1>Acceso a zona privada</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>
            <button type="submit" name="login">Iniciar sesión</button>
        </form>
        <a href="index.php">Volver al menú</a>
    </body>
    </html>
    <?php
    exit();
}

// Directorio de comandas
$dirComandas = __DIR__; //  Devuelve el directorio donde estas ubicado
$archivosComandas = glob($dirComandas . "/comanda_*_pendiente.txt"); // Busca archivos en un directorio que coincidan con el patron pasado
// Esto buscara dentro de dirComandas, un archivo que empiece por comandas, y acabe en pendiente_txt
// Si lo encuentra lo metera en un array

// Procesar comandos de gestión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['elaborar'])) {
        $archivoPendiente = $_POST['archivo'];
        $archivoElaborado = str_replace('_pendiente.txt', '_elaborada.txt', $archivoPendiente);
        rename($archivoPendiente, $archivoElaborado);
        header("Location: gestion_comandas.php");
        exit();
    } elseif (isset($_POST['cerrar_sesion'])) {
        session_destroy();
        header("Location: gestion_comandas.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Comandas</title>
</head>
<body>
    <h1>Gestión de Comandas</h1>
    <form method="POST">
        <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
    </form>
    <h2>Listado de comandas pendientes</h2>
    <?php if (!empty($archivosComandas)): ?>
        <ul>
            <?php foreach ($archivosComandas as $comanda): ?>
                <li>
                    <?php echo basename($comanda); ?>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="archivo" value="<?php echo $comanda; ?>">
                        <button type="submit" name="elaborar">Marcar como elaborada</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay comandas pendientes.</p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>
