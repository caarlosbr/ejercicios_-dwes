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
            text-align: center;
        }
        a{
            padding: 15px;
            color:white;
            text-decoration: none;
        }
        ul,li{
            list-style-position: inside;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <h1>DWES Carlos Borreguero Redondo</h1>
    <ul>
        <li><a href='http://192.168.97.118/ejercicios_dwes/UD3/03Condicionales/'>Ejercicios UD3</a><br><br></li>
        <li><a href='#'>Prácticas</a></li>
    </ul>

    <?php
       $Condi01 = "http://192.168.116.56/ejercicios_dwes/UD3/03Condicionales/01.php";

        $aEjercicios = array ("UD3" => array ("Condicionales" => array($Condi01,"02.php", "03.php", "04.php", "05.php"),
                                                     "Bucles" => array("01.php", "02.php", "03.php", "04.php"),
                                                     "Arrays" => array("01.php", "03.php", "04.php")
                                             )
                            );
        
    
    
    ?>
</body>
</html>