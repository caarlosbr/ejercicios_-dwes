<?php	
// Iniciamos la sesion
session_start();
    /**
     * Este programa crea un formulario con sesiones utilizando un array
     * que maneja una agenda de contactos
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */

// SI NO EXISTE LA VARIABLE DE SESIÓN, LA CREAMOS COMO ARRAY VACÍO
$nombre = $email = $tfno = "";
$errorUsuario = $errorEmail = $errorTfno = $errorValidacion = "";

    if(!isset($_SESSION["contacts"])) {
        $_SESSION["contacts"] = array();
    }

if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tfno = $_POST["tfno"];

    
    if(empty($nombre)){
        $errorUsuario = "nombre requerido ";
    }
    if(empty($email)){
        $errorEmail = "email requerido ";
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errorValidacion = "Formato de email incorrecto ";
    };
    if(empty($tfno)){
        $errorTfno = "Telefono requerido ";
    }

    // AÑADIMOS UN NUEVO ELEMENTO AL ARRAY. VER ARRAY_PUSH
    $_SESSION["contacts"][] = array(
        "nombre" => $nombre,
        "email" => $email,
        "tfno" => $tfno
    );
    $nombre = $email = $tfno = "";
} 
 
$data = $_SESSION["contacts"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }

    </style>
</head>
<body>
    <h1>Agenda</h1>
    <h2>Nuevo Contacto</h2>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre" id="nombre">
                <span style="color:red"><?php echo $errorUsuario ?></span><br/><br/>
        Email: <input type="text" name="email" id="email">
                <span style="color:red"><?php echo $errorEmail ?></span>
                <span style="color:red"><?php echo $errorValidacion ?></span><br/><br/>
        Telefono: <input type="number" name="tfno" id="tfno">
                <span style="color:red"><?php echo $errorTfno ?></span><br/><br/>
        <input type="submit" value="enviar" name="enviar" value="Enviar">
    </form>
    <h2>Lista de Contactos</h2>
    <?php
        foreach($data as $clave => $valor){
            echo $valor["nombre"] . " - " . $valor["email"] . " - " . $valor["tfno"];
            echo "<br/>";
        }
    ?>

    <br/>
    <a href="destroy.php">Cerrar sesión</a>
</body>
</html>