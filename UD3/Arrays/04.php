<?php
    /**
     * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
     * Almacenar información incluyendo foto y mostrar los menús disponibles. 
     * Mostrar el precio del menú suponiendo que éste se calcula sumando 
     * el precio de cada uno de los platos incluidos y con un descuento del 20 %.
     *.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * @date 2024-10-04
     */

    $primeros = array ("Pasta a la carbonara" => array (8.00, "<img src='img/pasta.jpg' style='width:150px'>"),
                        "Pizza Margarita" => array (8.00, "<img src='img/pizza.jpg' style='width:150px'>"),
                        "Sopa de marisco" => array (8.00, "<img src='img/sopa.jpg' style='width:150px'>"));

    $segundos = array("Croquetas" => array (7.00, "<img src='img/croquetas.jpg' style='width:150px'>"),
                       "Variedad de verdura" => array (7.00, "<img src='img/ensalada.jpg' style='width:150px'>"),
                       "Paella" => array (7.00, "<img src='img/paella.jpg' style='width:150px'>"),
                       "Huevos revueltos" => array (7.00, "<img src='img/huevos.jpg' style='width:150px'>"), 
                       "Salmon a la placha" => array (7.00, "<img src='img/salmon.jpg' style='width:150px'>"));

    $postres = array ("Helado chocolate" => array (3.00, "<img src='img/helado.jpg' style='width:150px'>"),
                       "Flan de huevo" => array (3.00, "<img src='img/tarta.jpg' style='width:150px'>"), 
                       "Tarta de queso" => array (3.00, "<img src='img/tarta2.jpg' style='width:150px'>"));
    echo "<h1>Menú</h1>";
    echo "<h2>Primeros platos</h2>";
    /* foreach ($primeros as $clave=>$valor){
         foreach ($valor as $clave1=>$valor1){
             echo $clave .": ". $valor1;
             echo "<br>";   
        } 
    } */

    foreach ($primeros as $clave=>$valor){
        echo $clave. "<br>";
        echo "Precio:" . $valor[0] . "<br>";
        echo $valor[1] . "<br>";
        echo "<br>";
        
    }

    echo "<h2>Segundos platos</h2>";
    foreach ($segundos as $clave=>$valor){
        echo $clave. "<br>";
        echo "Precio:" . $valor[0] . "<br>";
        echo $valor[1] . "<br>";
        echo "<br>";
        
    }

    echo "<h2>Postres</h2>";
    foreach ($postres as $clave=>$valor){
        echo $clave. "<br>";
        echo "Precio:" . $valor[0] . "<br>";
        echo $valor[1] . "<br>";
        echo "<br>";
        
    }
        
    $primerosPrecio = $primeros["Pasta a la carbonara"][0];
    $segundosPrecio = $segundos["Paella"][0];
    $postresPrecio = $postres["Helado chocolate"][0];
    $precioMenu = $primerosPrecio + $segundosPrecio + $postresPrecio;
    $restarDescuento = $precioMenu * 20 / 100;
    $precioFinal = $precioMenu - $restarDescuento;
    echo "<h3>El precio del menú con el decuento del 20% es de = $precioFinal €</h3>";

    echo "<div>";
        echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/main/UD3/Arrays/04.php'>Ver código</a>";
    echo "</div>";
?>