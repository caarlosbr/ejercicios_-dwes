<?php
/**
 * Clase Alumno que eextiende de Persona
 * 
 */

 require_once "Persona.php";

 class Alumno extends Persona
 {
    private $_nie;

    public function Saluda()
    {
        echo parent::Saludo();
        echo "Soy un alumno";
    }
 }

?>