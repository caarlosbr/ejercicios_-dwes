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
?>
