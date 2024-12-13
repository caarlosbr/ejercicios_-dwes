<?php

    /**
     * Borrar la cookie
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */


    if (isset($_COOKIE['c1'])){
        setcookie("c1", "Cookie 1" ,time()-60);
        echo "Cookie borrada";
    }


?>