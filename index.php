<?php
        /**
         * Este es el index que contiene los enlaces para las diferentes ejercicios de cada unidad
         *
         * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
         * @version 8.3.6
         * @date 2024-09-29
         */
        
        // Esto incluye el archivo .conf que contiene el array de ejercicios por unidades
        include_once 'conf/conf.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        foreach ($aEjercicios as $unidad => $temas){
            echo "<a href='http://192.168.97.118/ejercicios_dwes/$unidad'>$unidad</a>";
        }
    ?>

</body>
</html>