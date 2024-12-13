<?php
    /** 
     * Crea un sistema básico de autenticación en PHP. El objetivo es permitir que los
     * usuarios se autentiquen con un nombre de usuario y una contraseña para acceder al
     * área protegida.
     * Utiliza un array de configuración para almacenar los usuarios registrados en el
     * sistema.
     * Si no estamos autenticados en el sistema, la página de inicio mostrará: formulario de
     * login, información pública de inicio y menú de navegación por la zona pública.
     * Si estamos autenticados en el sistema, la página de inicio mostrará: información de
     * usuario con opción de cierre de sesión, hora de inicio de sesión, información pública
     * de inicio y menú de navegación por la zona pública y privada.
     * Las páginas de la aplicación solo deben mostrar un mensaje indicando si son públicas
     * o privadas.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */

    session_start();
    include 'conf/config.php';

    $mensaje = '';
    $mensajeError = '';

    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if(isset($usuarios[$usuario]) && $usuarios[$usuario] === $password){
            // usuario autenticado
            $_SESSION['usuario'] = $usuario;
            $_SESSION['login_time'] = date('d-m-Y H:i:s');
            $mensaje = "Bienvenido, $usuario";
        } else{
            $mensajeError = "Nombre de usuario o contraseña incorrectos";
        }
    }

    $autentificado = isset($_SESSION['usuario']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Pagina de inicio</h1>

    <?php if($autentificado): ?>
        <p>Usuario: <?php echo $_SESSION['usuario'] ?></p>
        <p>Hora de inicio de sesion: <?php echo $_SESSION['login_time']?></p>
        <p><?php echo $mensaje ?></p>
        <a href="cerrarsesion.php">Cerrar sesion</a>

        <nav>
            <a href="public.php">Pagina publica</a><br/>
            <a href="private.php">Pagina privada</a>
        </nav>
    <?php else: ?>
        <h2>Inciar sesion</h2>
        <form action="" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"><br/><br/>
            <label for="password">Contraseña</label>
            <input type="text" name="password"><br/><br/>
            <input type="submit" name="login">
        </form>

        <?php if($mensajeError): ?>
            <p style="color:red;"><?php echo $mensajeError ?></p>
        <?php endif; ?>

        <h2>Informacion publica</h2>
        <p>Esta es la zona publica</p>
        <nav>
            <a href="public.php">Pagina publica</a>
        </nav>
    <?php endif; ?>
</body>
</html>