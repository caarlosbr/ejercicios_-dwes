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
  echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Condicionales/03.php'>Ver código</a>";
     echo "</div>";
?>
