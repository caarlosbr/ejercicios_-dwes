<?php	
    /**
     * Formulario con nombre y contraseña, con guardar contraseña, que guarde la contraseña y si 
     * reiniciamos la pagina, que aparezaca guardada la informacion
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */


     if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (!isset($_POST['nombre'])){
            echo "Nombre requerido";
        } elseif(!isset($_POST['contrasenia'])){
            echo "Contraseña requerida";
        }
        else{
            $nombre = htmlspecialchars($_POST['nombre']); 
            $contrasenia = htmlspecialchars($_POST['contrasenia']); 
            $guardar = isset($_POST['guardar']) ? 'Aceptado' : 'No Aceptado';
        }

        if(isset($_POST['guardar'])){
            setcookie("nombre", "CookieGuardar", time()+3600);
            setcookie("contrasenia", "CookieGuardar", time()+3600);
            echo "La cookie esta cargada";
        }

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Guardar Contrasña</h1>
    
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre?>"><br/>
         
        <label for="contrasenia">Contraseña</label>
        <input type="text" name="contrasenia" value="<?php echo $contrasenia ?>"><br/>

        <label for="guardar">¿Deseas guardar la contraseña?</label>
        <input type="checkbox" name="guardar"><br/>

        <input type="submit" name="Enviar">
    </form>

</body>
</html>