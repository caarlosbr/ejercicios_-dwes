<?php
    
    /**
     * @author carlosbr <a24boreca@gmail.com>:
     * @time
     * @return 
     */

     $mes = 9;
     $año = 2024;

     switch($mes) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo"31 días";
        break;

        case 4:
        case 6:
        case 9:
        case 11:
            echo "30 días";
        break;
        case 2:
            if($y % 4 == 0 and ($y % 100 != 0 and $y % 400 ==0)){
                echo "29 días";
            }  else {
                echo "28 días";
            }
        break;
        default:
            echo "Mes no válido";
     }
    
    
?>


