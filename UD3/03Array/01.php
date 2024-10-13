<?php

    /**
     * Definir un array que permita almacenar y mostrar la siguiente información.
     *  a. Meses del año.
     *  b. Tablero para jugar al juego de los barcos.
     *  c. Nota de los alumnos de 2o DAW para el módulo DWES.
     *  d. Verbos irregulares en inglés.
     *  e. Información sobre continentes, países, capitales y banderas.
     *.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * @date 2024-09-27
     */

// Meses del año
$mes = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciemnbre");
foreach ($mes as $valor){
    echo $valor;
    echo "<br>";
}

echo "<br>";

//Tablero para jugar al juego de los barcos.
$tablero = array (
"A" => array ("1","2","3","4","5","6","7","8","9","10"),
"B" => array ("1","2","3","4","5","6","7","8","9","10"),
"C" => array ("1","2","3","4","5","6","7","8","9","10"),
"D" => array ("1","2","3","4","5","6","7","8","9","10"),
"E" => array ("1","2","3","4","5","6","7","8","9","10")); 


// Nota de los alumnos de 2ºDAW
$nombres =  array ("Bermúdez González, Raúl" => 5,
            "Borreguero Redondo, Carlos" => 6,
            "Cañas González, Álvaro" => 7,
            "Carmona Cicchetti, Miguel" => 5, 
            "Carrasco Castellano, Alejandro" => 8,
            "Cherif Mouaki Almabouada, Mostafa" => 9,
            "Coronado Ortega, Alejandro" => 6,
            "Delgado Morente, Juan Diego" => 5,
            "Escoto García, Marlon Jafet" => 7, 
            "Fernández Ariza, Ángel" => 8,
            "Fernández Arrayás, Alejandro" => 9,
            "Fernández Balsera, Daniel" => 5, 
            "Ferrer López, Jesús" => 6,
            "Frías Rojas, Jesús" => 7,
            "Galán Navas, Manuel" => 8,
            "García Báez, Víctor" => 9, 
            "García Díaz, Lucía" => 5,
            "González Martínez, Adrián" => 6,
            "Mariño Jiménez, Enrique" => 7, 
            "Martín-Castaño Carrillo, Oscar" => 8,
            "Mayén Pérez, José María" => 9,
            "Mérida Velasco, Pablo" => 5, 
            "Mora Sánchez, Héctor" => 6,
            "Pérez Cantarero, Luis" => 7,
            "Romero Romero, Carlos" => 8,
            "Ruiz Molero, Javier" => 9, 
            "Vaquero Abad, Alejandro" => 5,
            "Villén Moyano, Luís Miguel" => 6);

/* foreach ($nombres as $clave=>$valor){
    echo $clave ." :". $valor;
    echo "<br>";
} */
echo "<br>";



// Verbos irregulares en inglés.
$verbos = array (

    "arise" => array ("Simple Past = arise", "Past Participle = arisen", "Castellano = surgir"),
    "be" => array ("Simple Past = be", "Past Participle = was/were", "Castellano = ser"),
    "beat" => array ("Simple Past = beat", "Past Participle = beaten", "Castellano = golpear"),
    "became" => array ("Simple Past = become", "Past Participle = became", "Castellano = convertirse"),
    "begin" => array ("Simple Past = begin", "Past Participle = begun", "Castellano = comenzar")

);

/* foreach ($verbos as $clave=>$valor){
   foreach ($valor as $clave1=>$valor1){
        echo $clave .": ". $valor1;
        echo "<br>";
   }
} */


$info = array (

    "Europa" => array ("España" => array ("Madrid" => array("rojo", "amarillo","rojo"))),
    "America" => array ("Argentina" => array ("Buenos Aires" => array("azul", "blanca","azul"))),
    "Asia" => array ("Japon" => array ("Tokio" => array("Rojo", "Blanco"))),
    "Africa" => array ("Angola" => array ("Luanda" => array("Rojo", "Negro"))),
    "Oceania" => array ("Australia" => array ("Melbourne" => array("Azul", "Rojo","Blanco")))

);

?>