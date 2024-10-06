<?php
    
   /**
     * Script que cargue en variables mes y año e indica el número de días del mes. Utiliza la
     * estructura de control switch
     *
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
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
    
  echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Condicionales/02.php'>Ver código</a>";
     echo "</div>";    
?>


