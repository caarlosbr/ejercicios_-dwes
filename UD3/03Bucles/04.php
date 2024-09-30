<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        /**
         * Archivo que muestra paleta de colores. Utilizar una tabla que muestre el color y el valor
         * hexadecimal que le corresponde. Cada celda será un enlace a una página que
         * mostrará un fondo de pantalla con el color seleccionado. 
         *
         * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
         * @version 8.3.6
         * @date 2024-09-28
         */
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
    <style>
      table{
    border-collapse: collapse;
    width: 66%;
    margin: auto;
        
}

th, td {
	padding: 20px;
	text-align: center;
	border: 1px solid black;
    }
    </style>
</head>
<body>
    <?php
       echo "<h1 style='text-align:center;'>Paleta de colores Ejercicio4</h1>";
       echo"<table>";
       echo "<tr><th>Color</th><th>Hexadecimal</th></tr>";
       
       for ($rojo = 0; $rojo <= 255; $rojo+=185){
           for($verde = 0; $verde <= 255; $verde+=185){
               for ($azul = 0; $azul <= 255; $azul+=185){
                   $hexColor = sprintf("#%02x%02x%02x", $rojo, $verde, $azul);
                   
                   echo "<tr>";
                   echo "<td style='background-color: $hexColor; color:white;'> $rojo.$verde.$azul</td>";
                   echo "<td>$hexColor</td>";
                   echo "</tr>";
                  
               }
           }
       
       }
             
       echo "</table>";    
    ?>        
</body>
</html>