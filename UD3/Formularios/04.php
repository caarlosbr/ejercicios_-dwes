<?php

/**
 * Crear una aplicación que almacene información de países: nombre, capital y bandera.
 * Diseñar un formulario que permita seleccionar un país y nos muestre el nombre de la capital y la bandera.
 * 
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 * @version 8.3.6
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php	
        // ARRAY con la informacion de los paises
        $paises = array(
            "España" => array("capital" => "Madrid", "bandera" => 'https://flagcdn.com/es.svg'),
            "Argentina" => array("capital" => "Buenos Aires", "bandera" => "https://flagcdn.com/ar.svg"),
            "Japón" => array("capital" => "Tokio", "bandera" => "https://flagcdn.com/jp.svg"),
            "Angola" => array("capital" => "Luanda", "bandera" => "https://flagcdn.com/ao.svg"),
            "Australia" => array("capital" => "Canberra", "bandera" => "https://flagcdn.com/au.svg")
        );
    ?>

    <form action="" method="post">
        <label for="pais">Selecciona un pais</label>
        <select name="pais" id="pais">
            <option value="">--Seleccione--</option>

            <?php
                foreach($paises as $pais => $info){
                    echo "<option value=$pais>$pais</option>";
                }
            ?>
        </select>
        <input type="submit" value="Mostra Informacion">
    </form>
    <?php	

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $paisSeleccionado = $_POST['pais'];
                $capital = $paises[$paisSeleccionado]['capital'];
                $bandera = $paises[$paisSeleccionado]['bandera'];

                echo "<p>Capital: $capital</p>";
                echo "<img src='$bandera' >";
        }
    ?>

    <div>
        <a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/04Formularios/04.php'>Ver código</a>
    </div>
</body>
</html>
