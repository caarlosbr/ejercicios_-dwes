<?php
    /**
     * Script que muestre las tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
     *.
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     * @date 2024-09-27
     */

     for ($i = 1; $i <= 10; $i++){
    	echo " Tabla de multiplicar del $i: <br>";
    	for ($b = 1; $b <= 10; $b++){
        	echo " $i x $b =" .($i*$b). "<br>" ;
        }
        
     } 
     echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Bucles/03.php'>Ver código</a>";
     echo "</div>";
?>
