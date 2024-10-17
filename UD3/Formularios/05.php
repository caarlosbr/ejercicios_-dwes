<?php

    /**
     * Crear un script para sumar una serie de números. El número de números a sumar
     * será introducido en un formulario.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * 
     */

     // PEDIR AL USUARIO CUANTOS NUMEROS QUIERE SUMAR, Y PEDIRLES LOS NUMERO, Y QUE LUEGO LOS MUESTRE

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="numeros">¿Cuantos numeros quieres sumar?</label>
        <input type="number" name="cantidadNumeros">
        <input type="submit" name="enviar">
    </form> 

    <?php
    if (isset($_POST['cantidadNumeros'])) {
        $cantidadNumeros = $_POST['cantidadNumeros'];

        echo "<form action='' method='post'>";
        for ($i = 1; $i <= $cantidadNumeros; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' name='numeros[]'><br/>";
        }
        
        
        echo "<input type='submit' name='sumar' value='Sumar'>";
        echo "</form>";
    }
 
    if (isset($_POST['sumar'])) {
        $numeros = $_POST['numeros'];
        $suma = array_sum($numeros);
        echo "La suma de los números es: $suma";
    }

    ?>
</body>
</html>

<?php

     echo "<div>";
        echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Bucles/04.php'>Ver código</a>";
     echo "</div>";

?>