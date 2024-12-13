<?php	
    /**
     * Incluir en vuestro servidor un contandor que indique el usuario el 
     * numero de veces que se ha indicado
     * 
     * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
     * @version 8.3.6
     */

    if(!isset($_COOKIE['contador'])){
        //Creamos la cookie si no existe
        setcookie("contador", "0", time()+3600);
    } else{
        $valor = $_COOKIE['contador']+1;
        setcookie("contador", $valor, time()+3600);
    }

echo $_COOKIE['contador'];

?>

<button type="button"><a href="https://github.com/caarlosbr/ejercicios_-dwes/blob/main/UD4/Cookies/04.php">Ver código</a></button>
