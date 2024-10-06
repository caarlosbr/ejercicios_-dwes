<?php
    /**
     * Archivo que ordena 3 números de menor a mayor.
     *.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * @date 2024-09-27
     */

    $num1 = 15;
    $num2 = 7;
    $num3 = 20;

    if ($num1 <= $num2 && $num1 <= $num3) {
        if ($num2 <= $num3) {
            echo "$num1, $num2, $num3";
        } else {
            echo "$num1, $num3, $num2";
            }
        } elseif ($num2 <= $num1 && $num2 <= $num3) {
            if ($num1 <= $num3) {
                echo "$num2, $num1, $num3";
            } else {
                echo "$num2, $num3, $num1";
            }
        } else {
            if ($num1 <= $num2) {
                echo "$num3, $num1, $num2";
            } else {
                echo "$num3, $num2, $num1";
            }
    }
  echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Condicionales/01.php'>Ver código</a>";
     echo "</div>";
?>
