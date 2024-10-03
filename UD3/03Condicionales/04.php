<!DOCTYPE html>
<html lang="es">
<head>
    <?php

        /** 
         * Script que modifica la página inicial realizada, incluyendo una imagen de cabecera en función
         * de la estación del año en la que nos encontremos y un color de fondo en función de
         * la hora del día.
         *
         * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
         */
        
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Estación y Hora</title>

    <style>
        body{
            text-align: center;
            <?php
             $horaActual = date("H");  
            
            if ($horaActual >= 6 && $horaActual < 12) {
                
                echo "background-color: #FFFAE5;";  
            } elseif ($horaActual >= 12 && $horaActual < 20) {
                
                echo "background-color: #FFCC66;";  
            } else {
                
                echo "background-color: #2C3E50;"; 
            }
            ?>
        }
        .imagen-header {
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>

    <?php
    $dia = date("j");  
    $mes = date("n");  

    $imagenCabecera = '';

    switch (true) {
        case (($mes == 3 && $dia >= 20) || ($mes > 3 && $mes < 6) || ($mes == 6 && $dia < 21)):
            $imagenCabecera = 'img/primavera.jpg';
            $estacion = "Primavera";
            break;
        case (($mes == 6 && $dia >= 21) || ($mes > 6 && $mes < 9) || ($mes == 9 && $dia < 23)):
            $imagenCabecera = 'img/verano.jpeg';
            $estacion = "Verano";
            break;
        case (($mes == 9 && $dia >= 23) || ($mes > 9 && $mes < 12) || ($mes == 12 && $dia < 21)):
            $imagenCabecera = 'img/octubre.jpg';
            $estacion = "Otoño";
            break;
        case (($mes == 12 && $dia >= 21) || ($mes == 1 || $mes == 2) || ($mes == 3 && $dia < 20)):
            $imagenCabecera = 'img/invierno.jpg';
            $estacion = "Invierno";
            break;
        default:
            echo "Estación desconocida";
    }
    ?>

    <div class="imagen-header" style="background-image: url('<?php echo $imagenCabecera; ?>');">
    </div>

    <?php 
     echo $estacion;
     echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Condicionales/04.php'>Ver código</a>";
     echo "</div>";
?>
</body>
</html>
