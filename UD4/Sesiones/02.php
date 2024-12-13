<?php
/**
 * Escenario: Puzles infantiles.
 * Se debe crear una aplicación que permita resolver puzles infantiles de tres
 * piezas. Se adjunta fichas de ejemplo, pero es necesario que personalices las
 * fichas del rompecabezas.
 * Aplica criterios de usabilidad en el diseño de la aplicación intentando conseguir la
 * mejor experiencia de usuario.
 * @author = Carlos Borreguero Redondo
*/

// Iniciamos sesión
session_start();

$resolucion = "<p>Presione en las fotos para resolver el puzzle.</p><br/>";  // Variable que muestra la resolución del puzzle.

// Haz un array con las parejas de las piezas de los puzles
$puzles[] = ["img/1.JPG", "img/1b.JPG"];
$puzles[] = ["img/2.JPG", "img/2b.JPG"];
$puzles[] = ["img/3.JPG", "img/3b.JPG"];
$puzles[] = ["img/4.JPG", "img/4b.JPG"];
$puzles[] = ["img/5.JPG", "img/5b.JPG"];
$puzles[] = ["img/6.JPG", "img/6b.JPG"];

echo $puzles[1][1];


// Si no existe la variable de sesión, la creamos
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "";
}

// Inicializamos los índices de las imágenes si no están definidos
if (!isset($_SESSION['puzle_index1']) || !isset($_SESSION['puzle_index2'])) {
    $_SESSION['puzle_index1'] = random_int(0, count($puzles) - 1);
    $_SESSION['puzle_index2'] = random_int(0,count($puzles) - 1);
    $_SESSION['intentos'] = 0;
    $_SESSION['aciertos'] = 0;
}

// Si el usuario ha presionado el botón de reiniciar, randomizamos los índices
if (isset($_POST['reiniciar'])) {
    $_SESSION['puzle_index1'] = random_int(0, count($puzles) - 1);
    $_SESSION['puzle_index2'] = random_int(0, count($puzles) - 1);
}

/* echo $_SESSION['puzle_index1'];
echo $_SESSION['puzle_index2']; */

// Si se ha pulsado un botón, incrementamos el índice correspondiente
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['imagen1'])) {
        $_SESSION['puzle_index1'] = ($_SESSION['puzle_index1'] + 1) % count($puzles);
    } elseif (isset($_POST['imagen2'])) {
        $_SESSION['puzle_index2'] = ($_SESSION['puzle_index2'] + 1) % count($puzles);
    }
    
}

// Comprobamos si la resolución del puzle es correcta al presionar el botón "resolver"
if (isset($_POST["resolver"])) {
    $current_index1 = $_SESSION['puzle_index1'];
    $current_index2 = $_SESSION['puzle_index2'];
    $_SESSION['intentos']++;
    if ($current_index1 == $current_index2) {
        $resolucion =  "<p>¡Enhorabuena! Has resuelto el puzle.</p><br/>";
        $_SESSION['aciertos']++;
    } else {
        $resolucion = "<p>Lo siento, no has resuelto el puzle.</p><br/>";
    }
    $_SESSION['puzle_index1'] = random_int(0, count($puzles) - 1);
    $_SESSION['puzle_index2'] = random_int(0, count($puzles) - 1);
}


$current_index1 = $_SESSION['puzle_index1'];
$current_index2 = $_SESSION['puzle_index2'];
?>

<!-- VISTA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzle infantil</title>
</head>
<body>
    <h1>Puzles infantiles</h1>
    <form method="POST" action="">
        <button name="imagen1">
            <img src="<?php echo $puzles[$current_index1][0]; ?>" alt="imagen1" width="100" height="100">
        </button></br>
        <button name="imagen2">
            <img src="<?php echo $puzles[$current_index2][1]; ?>" alt="imagen2" width="100" height="100">
        </button><br/>
        <input type="submit" name="resolver" value="resolver"><br/>
        <input type="submit" name="reiniciar" value ="reiniciar"><br/>
    </form>
    <?php echo $resolucion; 
        echo "Aciertos: " . $_SESSION['aciertos'] . "</br>";
        echo "Intentos: " . $_SESSION['intentos'];?>
    </br><a href="cierre2.php">cerrar sesión</a>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div> 
</body>
</html>