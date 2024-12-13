<?php
/**
 * Test para comprobar el manejo del fichero de texto
 * @author 
 */

include './conf/config.php';
// Declaracion de variables
$aUsuario = array();
$desglose = [];
$alumno = '';
$nombreUsuario = '';
$contador = 0;

// Abrir fichero
$file = fopen("./RegMisAlu.csv", 'r');

// Despreciamos líneas de cabecera
for ($i = 0; $i < LINE_CABECERA; $i++) { 
    fgets($file);
}

// Recorremos el fichero hasta final de fichero con feof
while (!feof($file)) {
    // Cargamos la línea del fichero
    $alumno = fgets($file);
    // Reemplazamos los caracteres especiales
    $alumnos_st = str_replace($caracteresBusqueda, $caracteresRemplaza, $alumno);
    // Lo pasamos a minúscula
    $alumno_min = strtolower($alumnos_st);
    
    // Dividimos en palabras
    $desglose = explode(' ', $alumno_min);

    // Generamos el nombre de usuario verificando cada parte del array
    $nombreUsuario = substr($desglose[0] ?? "", 0, 2) . 
                     substr($desglose[1] ?? "", 0, 2) . 
                     substr($desglose[2] ?? "", 0, 2);

    // Verificamos duplicados y los ajustamos si es necesario
    if (in_array($nombreUsuario, $aUsuario)) {
        $contador++;
        $nombreUsuario = $nombreUsuario . $contador;
    } else {
        array_push($aUsuario, $nombreUsuario);
    }

    echo $nombreUsuario . '<br/>';
}

fclose($file);
?>
