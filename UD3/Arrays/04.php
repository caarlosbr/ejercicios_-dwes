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

    $primeros = array ("Pasta a la carbonara" => array ( "8.00€", "<img src='perfil.png' style='width:150px'>"),
                        "Pizza Carbonara" => array ("8.00€", "<img src='perfil.png' style='width:150px'>"),
                        "Sopa de marisco" => array ("8.00€", "<img src='perfil.png' style='width:150px'>"));

    $segundos = array("Croquetas" => array ("7.00€", "<img src='perfil.png' style='width:150px'>"),
                       "Pisto" => array ("7.00€", "<img src='perfil.png' style='width:150px'>"),
                       "Paella" => array ("7.00€", "<img src='perfil.png' style='width:150px'>"),
                       "Huevos revueltos" => array ("7.00€", "<img src='perfil.png' style='width:150px'>"), 
                       "Merluza a la placha" => array ("7.00€", "<img src='perfil.png' style='width:150px'>"));

    $postres = array ("Helado chocolate" => array ("3.00€", "<img src='perfil.png' style='width:150px'>"),
                       "Flan de huevo" => array ("3.00€", "<img src='perfil.png' style='width:150px'>"), 
                       "Tarta de queso" => array ("3.00€", "<img src='perfil.png' style='width:150px'>"));

    //echo $primeros["Pasta a la carbonara"][0.1];

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
        


?>