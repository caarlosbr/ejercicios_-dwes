<?php

    /**
     * Escribe una pagina que permite crear una cookie de duracion limitada
     * para comprobar el estado 
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */

    // Crear la cookie
    setcookie("c1", "Cookie 1" ,time()+60);

    echo "INicio <br/>";

     //Comprueba si existe
     if (isset($_COOKIE['c1'])){
        //Muestra la cookie
        echo $_COOKIE['c1'];
     } 

     echo "FIN";

?>