<?php
    /**
     * Este archivo cierra sesion
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */

    session_start();

    session_unset();

    session_destroy();

    header("Location: guiado.php");

?>