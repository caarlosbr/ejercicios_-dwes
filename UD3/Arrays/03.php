<?php
    /**
     * 3. Crear un array con los alumnos de clase y permitir la
     * selección aleatoria de uno de
     * ellos. El resultado debe mostrar nombre y fotografía.
     *.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * @date 2024-10-04
     */

     $nombres = array ("Bermúdez González Raúl",
     "Borreguero Redondo, Carlos",
     "Cañas González, Álvaro",
     "Carmona Cicchetti, Miguel", 
     "Carrasco Castellano, Alejandro",
     "Cherif Mouaki Almabouada, Mostafa",
     "Coronado Ortega, Alejandro",
     "Delgado Morente, Juan Diego",
     "Escoto García, Marlon Jafet", 
     "Fernández Ariza, Ángel",
     "Fernández Arrayás, Alejandro",
     "Fernández Balsera, Daniel", 
     "Ferrer López, Jesús",
     "Frías Rojas, Jesús",
     "Galán Navas, Manuel" ,
     "García Báez, Víctor" , 
     "García Díaz, Lucía",
     "González Martínez, Adrián",
     "Mariño Jiménez, Enrique", 
     "Martín-Castaño Carrillo, Oscar",
     "Mayén Pérez, José María",
     "Mérida Velasco, Pablo", 
     "Mora Sánchez, Héctor",
     "Pérez Cantarero, Luis",
     "Romero Romero, Carlos",
     "Ruiz Molero, Javier", 
     "Vaquero Abad, Alejandro",
     "Villén Moyano, Luís Miguel");

     $numAleatorio = rand(0,27);

    echo $nombres[$numAleatorio];
    echo "<br>";
    echo "<img src='perfil.png' style='width:150px'>";


?>