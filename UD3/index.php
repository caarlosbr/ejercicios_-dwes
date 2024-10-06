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
        $aEjercicios = array (
            "UD3" => array (
                "Condicionales" => array("01.php","02.php", "03.php", "04.php", "05.php"),
                "Bucles" => array("01.php", "02.php", "03.php", "04.php"),
                "Arrays" => array("01.php", "03.php", "04.php", "05.php")
            )
        );
        
    foreach ($aEjercicios as $unidad => $temas){
        foreach ($temas as $tema=>$ejercicios){
            foreach($ejercicios as $ejercicio){
                echo "<li><a href='http://192.168.1.89/ejercicios_dwes/$unidad/$tema/$ejercicio'>$tema - $ejercicio</a></li><br>";
            }                            
        }                  
    }

    ?>
</body>
</html>