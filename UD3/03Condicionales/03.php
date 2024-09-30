<?php

/**
     * @author carlosbr <a24boreca@gmail.com>:
     * @time
     * @return 
     */

    $diaNacimiento = 25;
    $mesNacimiento = 8;
    $anoNacimiento = 2005;

    //Obtener fecha actual
    $diaActual = date(format: "d");
    $mesActual = date(format: "m");
    $anoActual = date(format: "Y");

    $edad = $anoActual-$anoNacimiento;

    if ($mesActual < $mesNacimiento || ($mesActual == $mesNacimiento && $diaActual < $diaNacimiento)) {
        $edad --;

    }

    echo "Tienes $edad años";

?>
