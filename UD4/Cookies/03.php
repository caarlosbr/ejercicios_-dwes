<?php	
    /**
     * Formulario con nombre y contraseña, con guardar contraseña, que guarde la contraseña y si 
     * reiniciamos la pagina, que aparezca guardada la informacion
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */
    
    $nombre = "";
    $contrasenia = "";

    // Verificar si las cookies ya existen
    if (isset($_COOKIE['nombre'])) {
        $nombre = $_COOKIE['nombre'];
    }

    if (isset($_COOKIE['contrasenia'])) {
        $contrasenia = $_COOKIE['contrasenia'];
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['borrar'])) {
            // Borrar cookies y restablecer variables
            setcookie("nombre", "", time() - 3600); 
            setcookie("contrasenia", "", time() - 3600); 
            $nombre = ""; 
            $contrasenia = "";
            echo "La información ha sido borrada.";
        } else {
            if (empty($_POST['nombre'])) {
                echo "Nombre requerido";
            } elseif (empty($_POST['contrasenia'])) {
                echo "Contraseña requerida";
            } else {
                // Guardar datos en las variables
                $nombre = htmlspecialchars($_POST['nombre']); 
                $contrasenia = htmlspecialchars($_POST['contrasenia']);
                
                // Si se selecciona la opción de guardar, crear cookies
                if (isset($_POST['guardar'])) {
                    setcookie("nombre", $nombre, time() + 3600);                    
                    setcookie("contrasenia", $contrasenia, time() + 3600);  // 1 hora
                    echo "La cookie está cargada.";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Contraseña</title>
</head>
<body>

    <h1>Guardar Contraseña</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>"><br/>
         
        <label for="contrasenia">Contraseña</label>
        <input type="password" name="contrasenia" value="<?php echo $contrasenia ?>"><br/>

        <label for="guardar">Guardar los datos</label>
        <input type="checkbox" name="guardar"><br/>

        <input type="submit" name="Enviar" value="Enviar">
        <input type="submit" name="borrar" value="Borrar información almacenada">
    </form>

    <?php
    // Mostrar el nombre y la contraseña si están disponibles
    if (!empty($nombre) && !empty($contrasenia)) {
        echo "<h2>Información Guardada:</h2>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Contraseña:</strong> " . $contrasenia . "</p>";
    }
    ?>

</body>
</html>
