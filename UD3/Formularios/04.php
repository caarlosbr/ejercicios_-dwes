<?php

/**
 * Crear una aplicación que almacene información de países: nombre, capital y bandera.
 * Diseñar un formulario que permita seleccionar un país y nos muestre el nombre de la capital y la bandera.
 * 
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 * @version 8.3.6
 * @date 2024-09-29
 */

// Array que contiene la información de los países
$info = array(
    "España" => array("capital" => "Madrid", "bandera" => array("Rojo", "Amarillo", "Rojo")),
    "Argentina" => array("capital" => "Buenos Aires", "bandera" => array("Azul", "Blanco")),
    "Japón" => array("capital" => "Tokio", "bandera" => array("Rojo", "Blanco")),
    "Angola" => array("capital" => "Luanda", "bandera" => array("Rojo", "Negro")),
    "Australia" => array("capital" => "Canberra", "bandera" => array("Azul", "Rojo", "Blanco"))
);

// Variables para almacenar la información seleccionada
$paisSeleccionado = "";
$capital = "";
$bandera = "";

// Procesamos el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paisSeleccionado = $_POST['pais'];

    // Verificamos si el país seleccionado existe en el array
    if (array_key_exists($paisSeleccionado, $info)) {
        $capital = $info[$paisSeleccionado]['capital']; 
        $bandera = implode(", ", $info[$paisSeleccionado]['bandera']); 
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Países</title>
</head>
<body>

    <h1>Seleccione un país</h1>

    <form action="" method="post">
        <label for="pais">País:</label>
        
        <select name="pais" id="pais" onchange="this.form.submit()">
            <option value="">Seleccione un país</option>
            <?php
            // Generamos las opciones del select a partir del array $info
             foreach ($info as $pais => $detalles) {
                // Marca el país seleccionado
                $selected = ($pais == $paisSeleccionado) ? "selected" : "";
                echo "<option value='$pais' $selected>$pais</option>";
            } 

                //MEJORAR ESTO Y PONER LOS INDICES DEL ARRAY PAISES

            ?>
        </select><br/><br/>

        <label for="capital">Capital:</label>
        <input type="text" name="capital" id="capital" value="<?php echo htmlspecialchars($capital); ?>" readonly><br/><br/>

        <label for="bandera">Colores de la Bandera:</label>
        <input type="text" name="bandera" id="bandera" value="<?php echo htmlspecialchars($bandera); ?>" readonly><br/><br/>
    </form>
    <div>
        <a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/04Formularios/04.php'>Ver código</a>
    </div>
</body>
</html>



