<?php
session_start();
    if(!isset($_SESSION['nombre'])){
        $_SESSION['nombre'] = 'Carlos';
        $_SESSION['apellidos'] = 'Borreguero';
    }


?>