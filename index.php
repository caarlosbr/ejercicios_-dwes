<?php
        /**
         * Este es el index que contiene todos los ejercicios de la unidad 3
         *
         * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
         * @version 8.3.6
         * @date 2024-09-29
         */
        
        // Esto incluye el archivo .conf que contiene el array de ejercicios por unidades
        include_once 'conf/conf.php';
        $unidadSeleccionada = isset($_GET['unidad']) ? $_GET['unidad'] : null;

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo de configuración</title>
    <style>
        body{
            background:black;
            color: white;
            
        }
        a{
            padding: 15px;
            color:white;
            text-decoration: none;
        }
        ul,li{


        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>DWES Carlos Borreguero Redondo</h1>
    <?php
        
    if (!$unidadSeleccionada) {
        echo "<h2>Selecciona una unidad</h2>";
        echo "<ul>";
        foreach ($aEjercicios as $unidad => $temas) {
            echo "<li><a href='?unidad=$unidad'>$unidad</a></li><br/>";
        }
        echo "</ul>";
    } else {
        if (array_key_exists($unidadSeleccionada, $aEjercicios)) {
            echo "<h2>Ejercicios de la $unidadSeleccionada</h2>";
            echo "<ul>";
            foreach ($aEjercicios[$unidadSeleccionada] as $tema => $ejercicios) {
                foreach ($ejercicios as $ejercicio) {
                    $rutaEjercicio = "/ejercicios_dwes/$unidadSeleccionada/$tema/$ejercicio";
                    echo "<li><a href='$rutaEjercicio'>$tema - $ejercicio</a></li><br/>";
                }
            }
            echo "</ul>";
        } else {
            echo "<p>Unidad no encontrada.</p>";
        }
    }
        



    ?>
</body>
</html>